<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Hanya menampilkan halaman, jangan kirim data lewat compact!
        return view('welcome');
    }

    public function getData()
    {
        // Data dikirim sebagai JSON untuk dibaca JavaScript
        $data = [
            [
                "nama" => "Alden Audy Akbar",
                "nim" => "2311102309",
                "kelas" => "IF-11-07",
                "prodi" => "Informatika"
            ],
            [
                "nama" => "Titanio Francy",
                "nim" => "2311102289",
                "kelas" => "IF-11-07",
                "prodi" => "Informatika"
            ],
            [
                "nama" => "Didik Pratama",
                "nim" => "2311102285",
                "kelas" => "IF-11-07",
                "prodi" => "Informatika"
            ]
        ];

        return response()->json($data);
    }
}