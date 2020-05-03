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
              <a class="nav-link active" id="pribadi-tab" href="{{route('formulir.data-pribadi')}}">Data Pribadi</a>
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

            <div class="tab-pane fade show active" id="pribadi" role="tabpanel" aria-labelledby="pribadi-tab">
                <div class="container my-5">
                    <form>
                        <div class="form-group row">
                          <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                          <div class="col-8">
                            <input id="nama" name="nama" type="text" required="required" class="form-control">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="" class="col-4 col-form-label">Tempat Lahir</label> 
                          <div class="col-8">
                            <input id="" name="" type="text" required="required" class="form-control">
                          </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="row mb-4">
                            <div class="col-lg-4">
                            </div>
                            
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label> 
                                              <select id="tanggal_lahir" name="tanggal_lahir" required="required" class="custom-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                              </select>                    
                                          </div>
                                    </div>
        
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="bulan_lahir">Bulan Lahir</label>                           
                                              <select id="bulan_lahir" name="bulan_lahir" required="required" class="custom-select">
                                                <option value="1">Januari</option>
                                                <option value="2">February</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                              </select>                          
                                          </div>
                                    </div>
        
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tahun_lahir">Tahun Lahir</label>                           
                                            <input id="tahun_lahir" name="tahun_lahir" type="text" required="required" class="form-control">                          
                                        </div>
                                    </div>
                                </div>                                
                                <hr>
                            </div>

                        </div>                                                                        

                        <div class="form-group row">
                          <label for="agama" class="col-4 col-form-label">Agama</label> 
                          <div class="col-8">
                            <select id="agama" name="agama" class="custom-select">
                              <option value="ISLAM">Islam</option>
                              <option value="KRISTEN">Kristen</option>
                              <option value="KATOLIK">Katolik</option>
                              <option value="HINDU">Hindu</option>
                              <option value="BUDHA">Budha</option>
                              <option value="KONG HU CU">Kong Hu Cu</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="nomor_telepon" class="col-4 col-form-label">Nomor Telepon</label> 
                          <div class="col-8">
                            <input id="nomor_telepon" name="nomor_telepon" type="text" required="required" class="form-control">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="penyakit_bawaan" class="col-4 col-form-label">Penyakit Bawaan</label> 
                          <div class="col-8">
                            <textarea id="penyakit_bawaan" name="penyakit_bawaan" cols="40" rows="5" aria-describedby="penyakit_bawaanHelpBlock" class="form-control"></textarea> 
                            <span id="penyakit_bawaanHelpBlock" class="form-text text-muted">Masukan penyakit bawaan baris per baris</span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-4">Warga Negara</label> 
                          <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input name="warga_negara" id="warga_negara_0" type="radio" required="required" class="custom-control-input" value="WNI"> 
                              <label for="warga_negara_0" class="custom-control-label">Warga Negara Indonesia</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input name="warga_negara" id="warga_negara_1" type="radio" required="required" class="custom-control-input" value="WNA"> 
                              <label for="warga_negara_1" class="custom-control-label">Warga Negara Asing</label>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="tinggal_bersama" class="col-4 col-form-label">Tinggal Bersama</label> 
                          <div class="col-8">
                            <select id="tinggal_bersama" name="tinggal_bersama" required="required" class="custom-select">
                              <option value="ORANG TUA">Orangtua</option>
                              <option value="WALI">Wali</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="jumlah_saudara" class="col-4 col-form-label">Jumlah Saudara</label> 
                          <div class="col-8">
                            <input id="jumlah_saudara" name="jumlah_saudara" type="text" class="form-control">
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
