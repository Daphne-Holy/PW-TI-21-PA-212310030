<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //    return view('LaporPak.dashboard');
    // }

    public function dashboard()
    {
        return view('LaporPak.dashboard');
    }

    public function lapor()
    {
        return view('LaporPak.lapor');
    }

    public function progress()
    {
        return view('LaporPak.kirim');
    }

    // shift + alt + down
}
