<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function insertpost()
    {
        $result = DB::insert("INSERT INTO posts (judul, isi) values ('Testing Judul', 'Testing isi')");
        dump($result);
    }

    public function listpost()
    {
        $data = Post::all();
        return view('viewpost', ['data' => $data]);
    }

    public function editpost()
    {
        $result = DB::update("UPDATE posts GET judul = 'Ubah Judul Baru', isi = 'Ubah Isi Baru' WHERE id = 1");
        dump($result);
    }

    public function deletepost()
    {
        $result = DB::delete("DELETE FROM posts WHERE id = 1");
        dump($result);
    }
}
