@extends('layouts.dashboard')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>    
</div>

<div class="row">

    <div class="col-4">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Verifikasi Peserta
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-2" src="{{asset('img/undraw_verified.svg')}}">                    
                </div>
                <p>
                    Ikuti link berikut untuk memverifikasi peserta, <a href="#">klik disini</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Laporan Hasil Seleksi
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-5 mb-5" src="{{asset('img/undraw_collaborators_prrw.svg')}}">                    
                </div>
                <p>
                    Laporan hasil seleksi dapat dilihat <a href="#">disini</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Laporan Pembayaran
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-4 mb-3" src="{{asset('img/undraw_data_report.svg')}}">                    
                </div>
                <p>
                    Laporan hasil pembayaran dapat dilihat <a href="#">disini</a>
                </p>
            </div>
        </div>
    </div>

</div>
        
@endsection
