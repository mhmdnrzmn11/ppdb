@extends('layouts.dashboard-peserta')

@section('content')

<div class="row">

    <div class="col-12">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Cetak Formulir Pendaftaran
                </h6>
            </div>
            <div class="card-body text-dark">                
                <p>
                    Cetak formulir pendaftaran dengan informasi sebagai berikut :                     
                </p>

                <div class="row">
                    <p class="col-4">No. Registrasi</p><p class="col-8 font-weight-bold">: 20200500001</p>
                </div>
                    
                <div class="row">
                    <p class="col-4">Nama Peserta</p><p class="col-8 font-weight-bold">: Almira Salsabilla</p>
                </div>

                <div class="row">
                    <p class="col-4">Tempat/Tanggal Lahir</p><p class="col-8 font-weight-bold">: Bandung, 26 November 2005</p>
                </div>

                <button class="btn btn-primary">Cetak Formulir</button>
            </div>
        </div>
    </div>

</div>
        
@endsection
