<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSekolahPeserta extends Model
{
    protected $table = 'data_sekolah_pesertas';

    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'nisn',
        'nomor_skhun',
        'nomor_ijazah'        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
