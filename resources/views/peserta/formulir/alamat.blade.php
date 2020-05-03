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
              <a class="nav-link active" id="alamat-tab" href="{{route('formulir.alamat')}}">Alamat</a>
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

            <div class="tab-pane fade show active" id="alamat" role="tabpanel" aria-labelledby="alamat-tab">
                <div class="container my-5">
                    <form>

                        <div class="form-group row">
                          <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                          <div class="col-8">
                            <input id="alamat" name="alamat" type="text" required="required" class="form-control">
                          </div>
                        </div>                        

                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="rt">RT</label>                                   
                                    <input id="rt" name="rt" type="text" required="required" class="form-control">                                  
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="rw">RW</label> 
                                    <input id="rw" name="rw" type="text" required="required" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4"></div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="kelurahan">Kelurahan</label> 
                                    <input id="kelurahan" name="kelurahan" type="text" required="required" class="form-control">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label> 
                                    <input id="kecamatan" name="kecamatan" type="text" required="required" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4"></div>

                            <div class="col-4">                                
                                <div class="form-group ">
                                    <label for="kota">Kota</label>                                    
                                    <input id="kota" name="kota" type="text" required="required" class="form-control">                                    
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group ">
                                    <label for="provinsi">Provinsi</label>                                    
                                    <input id="provinsi" name="provinsi" type="text" required="required" class="form-control">                                    
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <div class="form-group">
                                  <label for="kode_pos">Kode Pos</label>                                   
                                    <input id="kode_pos" name="kode_pos" type="text" required="required" class="form-control">                                  
                                </div> 
                            </div>
                            <div class="col-4"></div>
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
