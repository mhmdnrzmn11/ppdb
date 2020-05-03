<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlamatPeserta extends Model
{

    protected $table = 'alamat_pesertas';
    
    protected $fillable = [
        'user_id',
        'alamat',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos'        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
