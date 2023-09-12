<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }
    // public function updateProfile(Request $request)
    // {
    //     $user = Auth::user();

    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
    //         'password' => 'nullable|string|min:8|confirmed',
    //     ]);

    //     $data = [
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //     ];

    //     if ($request->filled('password')) {
    //         $data['password'] = Hash::make($request->input('password'));
    //     }

    //     $user->update($data);

    //     return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    // }
}
