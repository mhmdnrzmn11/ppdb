@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow">            
            <div class="card-header">        
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h1 class="h5 mb-0 text-gray-800">Pembayaran Pendaftaran</h1>                        
                </div>    
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row">
                      <label for="text" class="col-2 col-form-label">Cari Peserta</label> 
                      <div class="col-3">
                        <input id="text" name="text" type="text" class="form-control" placeholder="No. Registrasi">
                      </div>
                      <button name="submit" type="submit" class="btn btn-primary col-1">Submit</button>
                    </div>                    
                </form>
                <hr>
                <p>Detail pembayaran atas nama : </p>
                <div class="row">
                    <p class="col-4">No. Registrasi</p><p class="col-8 font-weight-bold">: 20200500001</p>
                </div>
                    
                <div class="row">
                    <p class="col-4">Nama Peserta</p><p class="col-8 font-weight-bold">: Almira Salsabilla</p>
                </div>

                <div class="row">
                    <p class="col-4">Status Pembayaran</p><p class="col-8 font-weight-bold">: <span class="text-danger">Belum Lunas</span></p>
                </div>
                
                <table class="table table-bordered">
                    <tr>
                      <th class="text-center">No</th>
                      <th>Detail Pembayaran</th>
                      <th class="text-center">Biaya</th>
                    </tr>
                    <tr>
                      <td class="text-center">1</td>
                      <td>Biaya pendaftaran</td>
                      <td class="text-right">Rp.250.000,00</td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>Formulir</td>
                      <td class="text-right">Rp.50.000,00</td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>Administrasi</td>
                      <td class="text-right">Rp.5.000,00</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="text-center">Total Kewajiban Pembayaran</td>
                      <td class="text-right">Rp.300.000,00</td>
                    </tr>
                </table>

                <div class="float-right">
                    <button class="btn btn-success"><i class="fas fa-check"></i> Verifikasi Pembayaran</button>
                    <button class="btn btn-success"><i class="fas fa-print"></i> Cetak Hasil Pembayaran</button>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection
