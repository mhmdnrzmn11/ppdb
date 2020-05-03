@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow">            
            <div class="card-header">        
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h1 class="h5 mb-0 text-dark">Verifikasi Peserta</h1>                    
                </div>    
            </div>
            <div class="card-body text-dark">
                <div class="row">
                    <p class="col-2">
                        Nomor Registrasi
                    </p>
                    <p class="col-10">
                        : 20200500001
                    </p>
                </div>
                <div class="row">
                    <p class="col-2">
                        Nama Peserta
                    </p>
                    <p class="col-10">
                        : Almira Salsabilla
                    </p>
                </div>
                <div class="row">
                    <p class="col-2">
                        Tanggal Lahir
                    </p>
                    <p class="col-10">
                        : Bandung, 26 November 2005
                    </p>
                </div>

                <table class="table table-bordered">
                    <tr>
                      <th>No</th>
                      <th>Kelengkapan Berkas</th>
                      <th class="text-center">Verifikasi</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Formulir Pendaftaran</td>
                      <td class="text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="1"> 
                            <label for="radio_0" class="custom-control-label">Lengkap</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="0"> 
                            <label for="radio_1" class="custom-control-label">Belum Lengkap</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Foto Copy Kartu Keluarga</td>
                      <td class="text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio3" id="radio_3" type="radio" class="custom-control-input" value="1"> 
                            <label for="radio_3" class="custom-control-label">Lengkap</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio4" id="radio_4" type="radio" class="custom-control-input" value="0"> 
                            <label for="radio_4" class="custom-control-label">Belum Lengkap</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Foto Copy KTP Orangtua</td>
                      <td class="text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio5" id="radio_5" type="radio" class="custom-control-input" value="1"> 
                            <label for="radio_5" class="custom-control-label">Lengkap</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio6" id="radio_6" type="radio" class="custom-control-input" value="0"> 
                            <label for="radio_6" class="custom-control-label">Belum Lengkap</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Foto Copy NISN<br></td>
                      <td class="text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio7" id="radio_7" type="radio" class="custom-control-input" value="1"> 
                            <label for="radio_7" class="custom-control-label">Lengkap</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio8" id="radio_8" type="radio" class="custom-control-input" value="0"> 
                            <label for="radio_8" class="custom-control-label">Belum Lengkap</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Foto Copy Raport</td>
                      <td class="text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio9" id="radio_9" type="radio" class="custom-control-input" value="1"> 
                            <label for="radio_9" class="custom-control-label">Lengkap</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio10" id="radio_10" type="radio" class="custom-control-input" value="0"> 
                            <label for="radio_10" class="custom-control-label">Belum Lengkap</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Foto Copy Ijazah</td>
                      <td class="text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio11" id="radio_11" type="radio" class="custom-control-input" value="1"> 
                            <label for="radio_11" class="custom-control-label">Lengkap</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio12" id="radio_12" type="radio" class="custom-control-input" value="0"> 
                            <label for="radio_12" class="custom-control-label">Belum Lengkap</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Foto Copy SKHUN</td>
                      <td class="text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio13" id="radio_13" type="radio" class="custom-control-input" value="1"> 
                            <label for="radio_13" class="custom-control-label">Lengkap</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio14" id="radio_14" type="radio" class="custom-control-input" value="0"> 
                            <label for="radio_14" class="custom-control-label">Belum Lengkap</label>
                        </div>
                      </td>
                    </tr>
                </table>

                <div class="float-right">
                    <button class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection
