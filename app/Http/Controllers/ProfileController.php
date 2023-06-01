<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
    $halamanJudul = 'Profile';

    return view('profil',['halamanJudul' => $halamanJudul]);
    }
}
