@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow">            
            <div class="card-header">        
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h1 class="h5 mb-0 text-gray-800">Laporan Pengumuman Penerimaan</h1>    
                    <button class="btn btn-sm btn-primary">Cetak Laporan <i class="fas fa-print"></i></button>
                </div>    
            </div>
            <div class="card-body">
                <table class="table table-bordered text-dark">
                    <tr>
                      <th class="text-center">No</th>
                      <th>No.Registrasi</th>
                      <th>Nama Lunas</th>
                      <th class="text-center">Di Terima Pada Jurusan</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                    <tr>
                      <td class="text-center">1</td>
                      <td>20200500001</td>
                      <td>Almira Salsabilla</td>
                      <td class="text-center">Rekayasa Perangkat Lunak</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>20200500002</td>
                      <td>Bagus Ardiansyah</td>
                      <td class="text-center text-danger">Laporan Belum Diterima</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>20200500003</td>
                      <td>Noer Alamsyah</td>
                      <td class="text-center text-danger">Laporan Belum Diterima</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">4</td>
                      <td>20200500004<br></td>
                      <td>Nita Nurhasanah</td>
                      <td class="text-center text-danger">Laporan Belum Diterima</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">5</td>
                      <td>20200500005</td>
                      <td>Akbar Wahyu Nugroho</td>
                      <td class="text-center text-danger">Laporan Belum Diterima</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">6</td>
                      <td>20200500006</td>
                      <td>Budi Santoso </td>
                      <td class="text-center text-danger">Laporan Belum Diterima</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">7</td>
                      <td>20200500007</td>
                      <td>Elsa Ashura</td>
                      <td class="text-center text-danger">Laporan Belum Diterima</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">8</td>
                      <td>20200500008</td>
                      <td>Milla Cindy Maulida</td>
                      <td class="text-center text-danger">Laporan Belum Diterima</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">9</td>
                      <td>20200500009</td>
                      <td>Windi Fadhilah</td>
                      <td class="text-center text-danger">Laporan Belum Diterima</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">10</td>
                      <td>20200500010</td>
                      <td>Bayu Agung Pratama</td>
                      <td class="text-center text-danger">Laporan Belum Diterima</td>
                      <td class="text-center">                        
                          <button class="btn btn-sm btn-success">
                              Cetak Data
                           </button>
                      </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
        
@endsection
