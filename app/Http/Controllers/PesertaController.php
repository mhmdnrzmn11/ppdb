<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        return view('peserta.index');
    }

    public function isiRegistrasi()
    {
        return view('peserta.formulir.registrasi');
    }

    public function isiDataPribadi()
    {
        return view('peserta.formulir.data-pribadi');
    }

    public function isiAlamat()
    {
        return view('peserta.formulir.alamat');
    }

    public function isiDataAyah()
    {
        return view('peserta.formulir.data-ayah');
    }

    public function isiDataIbu()
    {
        return view('peserta.formulir.data-ibu');
    }

    public function isiDataSekolah()
    {
        return view('peserta.formulir.data-sekolah');
    }

    public function isiDataNilai()
    {
        return view('peserta.formulir.data-nilai');
    }

    public function cetakFormulir() {
        return view('peserta.formulir.cetak');
    }

    public function pembayaran()
    {
        return view('peserta.pembayaran.index');
    }

    public function pengumuman()
    {
        return view('peserta.pengumuman.index');
    }
}
