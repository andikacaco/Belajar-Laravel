<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return ('<h1>Halaman Index</h1>');
    }
    public function devfram()
    {
        return view('loopfor');
    }
    public function hasilujian()
    {
        return view('siswa', ['siswa' => 'Andika', 'nilai' => 110]);
    }
}
