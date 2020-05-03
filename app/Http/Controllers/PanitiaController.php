<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanitiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('panitia.index');
    }

    public function indexPeserta()
    {
        return view('panitia/manajemen-peserta/index');
    }

    public function verifikasi()
    {
        return view('panitia/manajemen-peserta/verifikasi');
    }

    public function pembayaran()
    {
        return view('panitia/manajemen-peserta/pembayaran');
    }

    public function laporanVerifikasi()
    {
        return view('panitia/laporan/verifikasi');        
    }

    public function laporanPembayaran()
    {
        return view('panitia/laporan/pembayaran');
    }

    public function pencarianDataPengumuman()
    {
        return view('panitia/seleksi/pencarian-pengumuman');
    }

    public function laporanSeleksi()
    {
        return view('panitia/seleksi/pengumuman');
    }

}
