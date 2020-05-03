<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataNilaiPeserta extends Model
{
    protected $table = 'data_nilai_pesertas';

    protected $fillable = [
        'user_id',
        'semester_1',
        'semester_2',
        'semester_3',
        'semester_4',
        'semester_5',
        'uas',
        'un'        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
