<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\DumpCommand;

class MahasiswaController extends Controller
{
    public function cekObject()
    {
        $mahasiswa = new Mahasiswa;

        dump($mahasiswa);
    }

    public function insert()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '20014487';
        $mahasiswa->nama = 'Andika Dharma Putra';
        $mahasiswa->tanggal_lahir = '2002-04-19';
        $mahasiswa->ipk = '3.5';
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function update()
    {
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->tanggal_lahir = '2002-05-19';
        $mahasiswa->ipk = 4.00;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function delete()
    {
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->delete();

        dump($mahasiswa);
    }

    public function all()
    {
        $data = Mahasiswa::all();
        return view('main', ['data' => $data]);
    }

    public function content()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa', ['data' => $data]);
    }
}
