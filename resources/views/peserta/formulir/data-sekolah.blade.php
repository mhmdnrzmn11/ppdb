@extends('layouts.dashboard-peserta')

@section('content')

<div class="card">

    <div class="card-header">Isi Formulir Pendaftaran</div>

    <div class="card-body ">
        <!-- Menu -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item">
                <a class="nav-link" id="registrasi-tab" href="{{route('formulir.registrasi')}}">Registrasi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " id="pribadi-tab" href="{{route('formulir.data-pribadi')}}">Data Pribadi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " id="alamat-tab" href="{{route('formulir.alamat')}}">Alamat</a>
            </li>                      

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Data Keluarga</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('formulir.data-ayah')}}">Data Ayah</a>
                  <a class="dropdown-item" href="{{route('formulir.data-ibu')}}">Data Ibu</a>
                  <a class="dropdown-item" href="#data-wali">Data Wali</a>                                        
              </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sekolah</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('formulir.data-sekolah')}}">Data Sekolah</a>
                    <a class="dropdown-item" href="">Data Prestasi</a>
                    <a class="dropdown-item" href="{{route('formulir.data-nilai')}}">Data Nilai</a>                                        
                </div>
            </li>

          </ul>
          <!-- /Menu -->

          <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="sekolah" role="tabpanel" aria-labelledby="sekolah-tab">
                <div class="container my-4">
                  <form>
                    <div class="form-group row">
                      <label for="nama_sekolah" class="col-4 col-form-label">Nama Sekolah</label> 
                      <div class="col-8">
                        <input id="nama_sekolah" name="nama_sekolah" type="text" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_sekolah" class="col-4 col-form-label">Alamat Sekolah</label> 
                      <div class="col-8">
                        <textarea id="alamat_sekolah" name="alamat_sekolah" cols="40" rows="5" class="form-control" required="required"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nisn" class="col-4 col-form-label">NISN</label> 
                      <div class="col-8">
                        <input id="nisn" name="nisn" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nomor_skhun" class="col-4 col-form-label">Nomor SKHUN</label> 
                      <div class="col-8">
                        <input id="nomor_skhun" name="nomor_skhun" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nomor_ijazah" class="col-4 col-form-label">Nomor Ijazah</label> 
                      <div class="col-8">
                        <input id="nomor_ijazah" name="nomor_ijazah" type="text" class="form-control">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>

          </div>        
    </div>

</div>
        
@endsection
