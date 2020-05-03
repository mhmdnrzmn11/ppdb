@extends('layouts.dashboard-peserta')

@section('content')

<div class="card">

    <div class="card-header">Isi Formulir Pendaftaran</div>

    <div class="card-body ">        
        <!-- Menu -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">

          <li class="nav-item">
              <a class="nav-link active" id="registrasi-tab" href="{{route('formulir.registrasi')}}">Registrasi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " id="pribadi-tab" href="{{route('formulir.data-pribadi')}}">Data Pribadi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="alamat-tab" href="{{route('formulir.alamat')}}">Alamat</a>
          </li>                      

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Data Keluarga</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('formulir.data-ayah')}}">Data Ayah</a>
                <a class="dropdown-item" href="{{route('formulir.data-ibu')}}">Data Ibu</a>
                <a class="dropdown-item" href="#data-wali">Data Wali</a>                                        
            </div>
          </li>
          
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sekolah</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('formulir.data-sekolah')}}">Data Sekolah</a>
                  <a class="dropdown-item" href="">Data Prestasi</a>
                  <a class="dropdown-item" href="{{route('formulir.data-nilai')}}">Data Nilai</a>                                        
              </div>
          </li>

        </ul>
        <!-- /Menu -->

          <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="registrasi" role="tabpanel" aria-labelledby="registrasi-tab">
                <div class="container my-5">
                    <form>
                        <div class="form-group row">
                          <label class="col-4 col-form-label" for="jalur_pendaftaran">Jalur Pendaftaran</label> 
                          <div class="col-8">
                            <select id="jalur_pendaftaran" name="jalur_pendaftaran" required="required" class="custom-select">
                              <option value="akademik">Akademik</option>
                              <option value="prestasi">Prestasi</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-4 col-form-label" for="pilihan_1">Pilihan Jurusan 1</label> 
                          <div class="col-8">
                            <select id="pilihan_1" name="pilihan_1" required="required" class="custom-select">
                              <option value="RPL">Rekayasa Perangkat Lunak</option>
                              <option value="TKJ">Teknik Komputer Jaringan</option>
                              <option value="TJA">Teknik Jaringan Akses</option>
                              <option value="TPI">Teknik Pendingin</option>
                              <option value="MM">Multimedia</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pilihan_2" class="col-4 col-form-label">Pilihan Jurusan 2</label> 
                          <div class="col-8">
                            <select id="pilihan_2" name="pilihan_2" required="required" class="custom-select">
                              <option value="RPL">Rekayasa Perangkat Lunak</option>
                              <option value="TKJ">Teknik Komputer Jaringan</option>
                              <option value="TJA">Teknik Jaringan Akses</option>
                              <option value="TPI">Teknik Pendingin</option>
                              <option value="MM">Multimedia</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pilihan_3" class="col-4 col-form-label">Pilihan Jurusan 3</label> 
                          <div class="col-8">
                            <select id="pilihan_3" name="pilihan_3" class="custom-select" required="required">
                              <option value="RPL">Rekayasa Perangkat Lunak</option>
                              <option value="TKJ">Teknik Komputer Jaringan</option>
                              <option value="TJA">Teknik Jaringan Akses</option>
                              <option value="TPI">Teknik Pendingin</option>
                              <option value="MM">Multimedia</option>
                            </select>
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
