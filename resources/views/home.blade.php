@extends('layouts.dashboard-peserta')

@section('content')

<div class="row">

    <div class="col-4">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Alur Pendaftaran
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-2" src="{{asset('img/undraw_project_completed.svg')}}">                    
                </div>
                <p>
                    Untuk melihat alur pendaftaran peserta dapat mengikuti link <a href="#">ini.</a> 
                </p>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Hasil Pengumuman Seleksi
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-4 mb-5" src="{{asset('img/undraw_time.svg')}}">                    
                </div>
                <p>
                    Pengumuman hasil seleksi dapat dilihat <a href="#">disini</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Proses Pembayaran
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-5 mb-5" src="{{asset('img/undraw_online_transactions.svg')}}">                    
                </div>
                <p>
                    Klik link <a href="#">ini</a> untuk melihat cara proses pembayaran.
                </p>
            </div>
        </div>
    </div>

</div>
        
@endsection
