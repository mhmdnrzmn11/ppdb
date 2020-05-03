<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPrestasiPeserta extends Model
{
    protected $table = 'data_prestasi_pesertas';

    protected $fillable = [
        'user_id',
        'nama_prestasi',
        'keterangan'        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
