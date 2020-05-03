@extends('layouts.dashboard-peserta')

@section('content')

<div class="row">

    <div class="col-12">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Pengumuman Hasil Seleksi
                </h6>
            </div>
            <div class="card-body text-dark">                

                <div class="alert alert-success">
                    <p>Selamat, anda telah diterima sebagi peserta didik baru tahun ajaran 2020/2021!</p>
                    <p>Dengan detail pendaftaran sebagai berikut : </p>
                    
                    <div class="row">
                        <p class="col-4">No. Registrasi</p><p class="col-8 font-weight-bold">: 20200500001</p>
                    </div>
                        
                    <div class="row">
                        <p class="col-4">Nama Peserta</p><p class="col-8 font-weight-bold">: Almira Salsabilla</p>
                    </div>                    
                    
                    <div class="row">
                        <p class="col-4">Di terima pada</p><p class="col-8 font-weight-bold">: Senin, 20 April 2020</p>
                    </div>  

                    <div class="row">
                        <p class="col-4">Di terima oleh jurusan</p><p class="col-8 font-weight-bold">: Rekayasa Perangkat Lunak</p>
                    </div>  

                    <p>Anda diharapkan melakukan registrasi ulang di pihak tata usaha sekolah, dan mengikuti kegiatan MPLS pada tanggal yang telah ditentukan.</p>

                </div>

                <div class="float-right">
                    <button class="btn btn-success">
                        Cetak Hasil Seleksi
                    </button>
                </div>
                

            </div>
        </div>
    </div>

</div>
        
@endsection
