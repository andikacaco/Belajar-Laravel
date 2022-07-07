<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function insertpost()
    {
        $result = DB::insert("INSERT INTO posts (judul, isi) values ('Testing Judul', 'Testing Isi')");
        dump($result);
    }
}
