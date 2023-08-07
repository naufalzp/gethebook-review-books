<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class VerifController extends Controller
{
    public function verif($code)
{
    $user = User::where('verification_code', $code)->first();
    if (!$user) {
        return redirect()->route('login')->with('error', 'Invalid verification code.');
    }

    if ($user->hasVerifiedEmail()) {
        return redirect()->route('login')->with('error', 'Your email address is already verified.');
    }

    $user->markEmailAsVerified();

    return redirect()->route('login')->with('success', 'Email verified successfully. You can now log in.');
}
}
