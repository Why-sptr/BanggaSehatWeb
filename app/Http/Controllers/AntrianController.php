<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntrianController extends Controller
{
    public function showBookingDetail($id)
    {
        // Dapatkan informasi dokter berdasarkan $id
        $dokter = Dokter::find($id);

        // Lakukan pengecekan apakah dokter ditemukan
        if (!$dokter) {
            // Tampilkan pesan error atau redirect ke halaman tertentu jika dokter tidak ditemukan
            return redirect()->route('halaman-error')->with('error', 'Dokter tidak ditemukan');
        }

        // Pass informasi dokter ke halaman booking detail
        return view('booking-detail', compact('dokter'));
    }

    public function bookDokter(Request $request, $dokterId, $userId, $tanggal, $jam)
    {
        // Cek ketersediaan jam
        $bookedCount = Antrian::where('dokter_id', $dokterId)
            ->where('tanggal', $tanggal)
            ->where('jam', $jam)
            ->count();

        // Ganti 5 dengan jumlah maksimal booking per jam
        if ($bookedCount >= 5) {
            return response()->json(['message' => 'Jam sudah penuh'], 400);
        }

        // Lakukan booking
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
        $antrian = Antrian::findOrFail($antrianId);

        return view('antrian', compact('antrian'));
    }

    public function showRiwayat($userId)
    {
        $user = User::findOrFail($userId);
        $queueHistory = $user->antrians()->with('dokter')->orderBy('tanggal', 'desc')->get();

        return view('riwayat', ['user' => $user, 'queueHistory' => $queueHistory]);
    }
}
