@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow">            
            <div class="card-header">        
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h1 class="h4 mb-0 text-gray-800">Data Peserta</h1>    
                    <button class="btn btn-sm btn-primary">Cetak Data Peserta <i class="fas fa-print"></i></button>
                </div>    
            </div>
            <div class="card-body">
                <table class="table table-bordered text-dark">
                    <tr>
                      <th class="text-center">No</th>
                      <th>No.Registrasi</th>
                      <th>Nama Lengkap</th>
                      <th class="text-center">Tanggal Lahir</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                    <tr>
                      <td class="text-center">1</td>
                      <td>20200500001</td>
                      <td>Almira Salsabilla</td>
                      <td class="text-center">26/11/2005</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>20200500002</td>
                      <td>Bagus Ardiansyah</td>
                      <td class="text-center">13/02/2006</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>20200500003</td>
                      <td>Noer Alamsyah</td>
                      <td class="text-center">31/12/2005</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">4</td>
                      <td>20200500004<br></td>
                      <td>Nita Nurhasanah</td>
                      <td class="text-center">29/11/2005</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">5</td>
                      <td>20200500005</td>
                      <td>Akbar Wahyu Nugroho</td>
                      <td class="text-center">01/03/2006</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">6</td>
                      <td>20200500006</td>
                      <td>Budi Santoso </td>
                      <td class="text-center">25/05/2006</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">7</td>
                      <td>20200500007</td>
                      <td>Elsa Ashura</td>
                      <td class="text-center">09/02/2006</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">8</td>
                      <td>20200500008</td>
                      <td>Milla Cindy Maulida</td>
                      <td class="text-center">18/04/2006</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">9</td>
                      <td>20200500009</td>
                      <td>Windi Fadhilah</td>
                      <td class="text-center">15/05/2006</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">10</td>
                      <td>20200500010</td>
                      <td>Bayu Agung Pratama</td>
                      <td class="text-center">28/07/2005</td>
                      <td class="text-center">
                          <button class="btn btn-sm btn-primary">
                              Ubah Data
                          </button>
                          <button class="btn btn-sm btn-success">
                              Verifikasi Peserta
                          </button>
                      </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
        
@endsection
