<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPeserta extends Model
{

    protected $table = 'data_pesertas';

    protected $fillable = [
        'user_id', 
        'nama', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'agama',
        'nomor_telepon',
        'penyakit_bawaan',
        'warga_negara',
        'tinggal_bersama',
        'jumlah_saudara'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
