<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::orderBy('ISBN/NISN')-> get();

        return view('#nama_view_buku', []);
    }

    public function show($id)
    {
        return view('nama_detil view',[
            'ISBN/NISN' => $buku
        ]);
    }
    
}
