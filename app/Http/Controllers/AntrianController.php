<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Dokter;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AntrianController extends Controller
{
    public function showBookingDetail($id)
    {
        $dokter = Dokter::find($id);

        if (!$dokter) {
            return redirect()->route('halaman-error')->with('error', 'Dokter tidak ditemukan');
        }

        return view('booking-detail', compact('dokter'));
    }

    public function bookDokter(Request $request, $dokterId, $userId, $tanggal, $jam)
    {
        $bookedCount = Antrian::where('dokter_id', $dokterId)
            ->where('tanggal', $tanggal)
            ->where('jam', $jam)
            ->count();

        if ($bookedCount >= 5) {
            return response()->json(['message' => 'Jam sudah penuh'], 400);
        }

        $antrian = new Antrian();
        $antrian->dokter_id = $dokterId;
        $antrian->user_id = $userId;
        $antrian->tanggal = $tanggal;
        $antrian->jam = $jam;
        $antrian->nama_pasien = $request->input('nama_pasien');
        $antrian->hp_pasien = $request->input('hp_pasien');
        $antrian->selected_date = $tanggal;
        $antrian->nomor_antrian = "B-" . rand(10000, 99999);

        $antrian->save();

        return response()->json(['message' => 'Booking berhasil', 'redirect_url' => route('antrian', ['antrianId' => $antrian->id])]);
    }


    public function antrianDetail($antrianId)
    {
        try {
            $antrian = Antrian::findOrFail($antrianId);

            $userId = Auth::id();

            return view('antrian', compact('antrian', 'userId'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function showRiwayat($userId, Request $request)
    {
        try {
            $userId = Crypt::decryptString($userId);
        } catch (DecryptException $e) {
            abort(404);
        }

        $user = User::findOrFail($userId);
        $searchQuery = $request->input('search');

        $queueHistory = $user->antrians()
            ->when($searchQuery, function ($query) use ($searchQuery) {
                $query->whereHas('dokter', function ($subquery) use ($searchQuery) {
                    $subquery->where('name', 'like', '%' . $searchQuery . '%');
                });
            })
            ->with('dokter')
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('riwayat', ['user' => $user, 'queueHistory' => $queueHistory, 'searchQuery' => $searchQuery]);
    }
}
