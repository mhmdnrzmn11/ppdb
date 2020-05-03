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
              <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Data Keluarga</a>
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

            <div class="tab-pane fade show active" id="data-ibu" role="tabpanel" aria-labelledby="data-ibu-tab">
                <div class="container my-4">
                  <h3>Data Ibu</h3>
                  <form name="data-ibu">
                    <div class="form-group row">
                      <label for="nama" class="col-3 col-form-label">Nama Ayah</label> 
                      <div class="col-9">
                        <input id="nama" name="nama" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tempat_lahir" class="col-3 col-form-label">Tempat Lahir</label> 
                      <div class="col-9">
                        <input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tanggal_lahir" class="col-3 col-form-label">Tanggal Lahir</label> 
                      <div class="col-9">
                        <select id="tanggal_lahir" name="tanggal_lahir" class="custom-select">
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
                    <div class="form-group row">
                      <label for="bulan_lahir" class="col-3 col-form-label">Bulan Lahir</label> 
                      <div class="col-9">
                        <select id="bulan_lahir" name="bulan_lahir" class="custom-select" required="required">
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
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
                    <div class="form-group row">
                      <label for="tahun_lahir" class="col-3 col-form-label">Tahun Lahir</label> 
                      <div class="col-9">
                        <input id="tahun_lahir" name="tahun_lahir" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="agama" class="col-3 col-form-label">Agama</label> 
                      <div class="col-9">
                        <select id="agama" name="agama" class="custom-select" required="required">
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
                      <label for="alamat" class="col-3 col-form-label">Alamat</label> 
                      <div class="col-9">
                        <input id="alamat" name="alamat" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nomor_telepon" class="col-3 col-form-label">Nomor Telepon</label> 
                      <div class="col-9">
                        <input id="nomor_telepon" name="nomor_telepon" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pendidikan" class="col-3 col-form-label">Pendidikan</label> 
                      <div class="col-9">
                        <select id="pendidikan" name="pendidikan" class="custom-select" required="required">
                          <option value="SD SEDERAJAT">SD Sederajat</option>
                          <option value="SMP SEDERAJAT">SMP Sederajat</option>
                          <option value="SMA SEDERAJAT">SMA Sederajar</option>
                          <option value="DIPLOMA">Diploma</option>
                          <option value="SARJANA">Sarjana</option>
                          <option value="MAGISTER">Magister</option>
                          <option value="DOKTOR">Doktor</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pekerjaan" class="col-3 col-form-label">Pekerjaan</label> 
                      <div class="col-9">
                        <input id="pekerjaan" name="pekerjaan" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pendapatan" class="col-3 col-form-label">Pendapatan</label> 
                      <div class="col-9">
                        <select id="pendapatan" name="pendapatan" class="custom-select" required="required">
                          <option value="x<1">Kurang dari 1 Juta Rupiah</option>
                          <option value="1>x<3">1 Sampai 3 Juta Rupiah</option>
                          <option value="3>x<5">3 Sampai 5 Juta Rupiah</option>
                          <option value="x>5">Diatas 5 Juta Rupiah</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3">Warga Negara</label> 
                      <div class="col-9">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="warga_negara" id="warga_negara_0" type="radio" class="custom-control-input" value="WNI" required="required"> 
                          <label for="warga_negara_0" class="custom-control-label">Warga Negara Indonesia</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="warga_negara" id="warga_negara_1" type="radio" class="custom-control-input" value="WNA" required="required"> 
                          <label for="warga_negara_1" class="custom-control-label">Warga Negara Asing</label>
                        </div>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="offset-3 col-9">
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
