<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();

        $finduser = User::where('google_id', $user->getId())->first();

        if ($finduser) {
            Auth::login($finduser);
        } else {
            $newuser = User::create([
                'first_name' => $user->user['given_name'] ?? null, // Mendapatkan nama pertama dari Socialite (Google)
                'last_name' => $user->user['family_name'] ?? null, // Mendapatkan nama terakhir dari Socialite (Google)
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('1234242'),
                'profile_picture' => $user->getAvatar(), // Ambil URL gambar profil dari Socialite
            ]);

            Auth::login($newuser);
        }

        return redirect()->intended('homepage');
    }


    public function update(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'usia' => 'numeric',
            'phone' => 'string',
            'email' => 'required|email',
        ]);

        // Perbarui data profil pengguna
        Auth::user()->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'usia' => $request->input('usia'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ]);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect to wherever you want after logout
        return redirect('/homepage'); // Change this to your desired URL
    }
}
