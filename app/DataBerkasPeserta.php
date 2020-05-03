<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBerkasPeserta extends Model
{
    protected $table = 'data_berkas_pesertas';

    protected $fillable = [
        'user_id',
        'registrasi_id',
        'formulir_pendaftaran',
        'fc_kk',
        'fc_ktp_orangtua',
        'fc_nisn',
        'fc_raport',
        'fc_ijazah',
        'fc_skhun',
        'pas_foto'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
