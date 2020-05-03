@extends('layouts.dashboard-peserta')

@section('content')

<div class="card">

    <div class="card-header">Isi Formulir Pendaftaran</div>

    <div class="card-body ">        
        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item">
              <a class="nav-link active" id="registrasi-tab" data-toggle="tab" href="#registrasi" role="tab" aria-controls="registrasi" aria-selected="true">Registrasi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="pribadi-tab" data-toggle="tab" href="#pribadi" role="tab" aria-controls="pribadi" aria-selected="false">Data Pribadi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="alamat-tab" data-toggle="tab" href="#alamat" role="tab" aria-controls="alamat" aria-selected="false">Alamat</a>
            </li>                      

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Data Keluarga</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" data-toggle="tab" role="tab" href="#data-ayah">Data Ayah</a>
                  <a class="dropdown-item" data-toggle="tab" role="tab" href="#data-ibu">Data Ibu</a>
                  <a class="dropdown-item" data-toggle="tab" role="tab" href="#data-wali">Data Wali</a>                                        
              </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sekolah</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="tab" role="tab" href="#sekolah">Data Sekolah</a>
                    <a class="dropdown-item" data-toggle="tab" role="tab" href="#prestasi">Data Prestasi</a>
                    <a class="dropdown-item" data-toggle="tab" role="tab" href="#nilai">Data Nilai</a>                                        
                </div>
            </li>

          </ul>

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

            <div class="tab-pane fade" id="pribadi" role="tabpanel" aria-labelledby="pribadi-tab">
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

            <div class="tab-pane fade" id="alamat" role="tabpanel" aria-labelledby="alamat-tab">
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

            <div class="tab-pane fade" id="data-ayah" role="tabpanel" aria-labelledby="data-ayah-tab">
                <div class="container my-4">
                  <h3>Data Ayah</h3>
                  <form name="data-ayah">
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

            <div class="tab-pane fade" id="data-ibu" role="tabpanel" aria-labelledby="data-ibu-tab">
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

            <div class="tab-pane fade" id="sekolah" role="tabpanel" aria-labelledby="sekolah-tab">
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

            <div class="tab-pane fade" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
                <div class="container my-4">

                </div>
            </div>

            <div class="tab-pane fade" id="nilai" role="tabpanel" aria-labelledby="nilai-tab">
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
