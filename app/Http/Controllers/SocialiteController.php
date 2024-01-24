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
                'first_name' => $user->user['given_name'] ?? null,
                'last_name' => $user->user['family_name'] ?? null,
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('1234242'),
                'profile_picture' => $user->getAvatar(),
            ]);

            Auth::login($newuser);
        }

        return redirect()->intended('homepage');
    }


    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'usia' => 'numeric',
            'nomor' => 'required|string',
            'email' => 'required|email',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'usia' => $request->input('usia'),
            'nomor' => $request->input('nomor'),
            'email' => $request->input('email'),
        ]);

        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');

            $fileName = time() . '_' . $profilePicture->getClientOriginalName();
            $profilePicture->storeAs('public/profile_pictures', $fileName);

            $user->update(['profile_picture' => 'storage/profile_pictures/' . $fileName]);
        }

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/homepage');
    }
}
