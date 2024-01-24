<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DokterController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $dokters = Dokter::all();
        $dokterUmums = Dokter::where('spesialis', 'Dokter Umum')->get();
        $dokterGigis = Dokter::where('spesialis', 'Dokter Gigi')->get();
        $dokterBedahs = Dokter::where('spesialis', 'Dokter Bedah')->get();
    
        return view('booking-dokter', compact('dokters', 'dokterUmums', 'dokterGigis','dokterBedahs', 'userId'));
    }

    public function show($id)
    {
        $dokter = Dokter::find($id);

        if (!$dokter) {
            return response()->json(['message' => 'Dokter not found'], 404);
        }

        return response()->json(['data' => $dokter]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'spesialis' => 'required|string',
            'rating' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('dokter'), $imageName);
            $data['picture'] = 'dokter/' . $imageName;
        }

        $dokter = Dokter::create($data);

        return response()->json(['data' => $dokter, 'message' => 'Dokter created successfully'], 201);
    }

    public function update(Request $request, $id)
    {
        $dokter = Dokter::find($id);

        if (!$dokter) {
            return response()->json(['message' => 'Dokter not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'spesialis' => 'required|string',
            'rating' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $dokter->update($request->all());

        return response()->json(['data' => $dokter, 'message' => 'Dokter updated successfully']);
    }

    public function destroy($id)
    {
        $dokter = Dokter::find($id);

        if (!$dokter) {
            return response()->json(['message' => 'Dokter not found'], 404);
        }

        $dokter->delete();

        return response()->json(['message' => 'Dokter deleted successfully']);
    }
}
