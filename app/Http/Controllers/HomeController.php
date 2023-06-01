<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $halamanJudul = 'Welcome';

        return View('welcome',['halamanJudul' => $halamanJudul]);
    }
}
