<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKeluargaPeserta extends Model
{

    protected $table = 'data_keluarga_pesertas';

    protected $fillable = [
        'user_id',
        'tinggal_bersama',
        'jumlah_saudara'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
