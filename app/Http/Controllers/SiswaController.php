<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //ini adalah tempat edit untuk fungsi dan perintah yang akan dijalankan
    public function dataSiswa()
    {
        $siswa1 = 'Rizky';
        $asal1 = 'Surabaya';
        $siswa2 = 'Bayu';
        $asal2 = 'Depok';
        return view('data_siswa', compact('siswa1', 'siswa2', 'asal1', 'asal2'));
    }
}
