<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    
    

public function index() {
    return view('laporan.index');
}

public function search() {
    return "cari Laporan Mahasiswa";
}

public function detail() {
    return "rincian Laporan Mahasiswa";
}
}
