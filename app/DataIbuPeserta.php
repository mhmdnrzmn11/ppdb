<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataIbuPeserta extends Model
{

    protected $table = 'data_ibu_pesertas';

    protected $fillable = [
        'user_id',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'alamat',
        'warga_negara',
        'nomor_telepon',
        'pendidikan',
        'pendapatan'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
