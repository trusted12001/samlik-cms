<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ResetPasswordController extends Controller
{
    /**
     * Show the form for resetting the password.
     */
    public function showResetForm()
    {
        return view('back-end.users.reset-password');
    }

    /**
     * Update the user's password.
     */
    public function update(Request $request)
    {
        // Validate the password and ensure confirmation matches
        $validatedData = $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Update the password for the authenticated user
        $user = $request->user();
        $newHash = Hash::make($validatedData['password']);
        $user->password = $newHash;
        $user->save();

        Log::info("User {$user->id} password updated. New hash: {$newHash}");

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
