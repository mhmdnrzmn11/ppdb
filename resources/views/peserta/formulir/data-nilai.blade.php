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

            <div class="tab-pane fade show active" id="nilai" role="tabpanel" aria-labelledby="nilai-tab">
                <div class="container my-4">
                  <h3>Data Nilai</h3>
                  <p class="text-muted">Masukan rata - rata nilai raport per semester</p>
                  <form>
                    <div class="form-group row">
                      <label for="semester_1" class="col-4 col-form-label">Semester 1</label> 
                      <div class="col-8">
                        <input id="semester_1" name="semester_1" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="semester_2" class="col-4 col-form-label">Semester 2</label> 
                      <div class="col-8">
                        <input id="semester_2" name="semester_2" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-4 col-form-label">Semester 3</label> 
                      <div class="col-8">
                        <input id="text" name="text" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="semester_4" class="col-4 col-form-label">Semester 4</label> 
                      <div class="col-8">
                        <input id="semester_4" name="semester_4" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="semester_5" class="col-4 col-form-label">Semester 5</label> 
                      <div class="col-8">
                        <input id="semester_5" name="semester_5" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                      <div class="col-8">
                        <input id="uas" name="uas" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="un" class="col-4 col-form-label">Nilai UN</label> 
                      <div class="col-8">
                        <input id="un" name="un" type="text" class="form-control" required="required">
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
