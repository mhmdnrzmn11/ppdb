<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $table = 'registrasis';

    protected $fillable = [
        'user_id',
        'jalur_pendaftaran',
        'pilihan_1',
        'pilihan_2',
        'pilihan_3'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
