<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraan';
    protected $primaryKey = 'no_pol';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = [
        'no_pol',
        'no_mesin',
        'merek',
        'warna',
    ];


    // Relationship example (if needed)
    public function keluhan()
    {
        return $this->belongsTo(Keluhan::class, 'no_pol', 'no_pol');
    }
}
