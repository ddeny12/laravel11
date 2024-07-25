<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = [
        'nama_pegawai',
        'alamat',
        'jk',
        'jabatan',
        'status',
    ];

    public function keluhan(){
        return $this-> hasMany(Keluhan::class, 'id_pegawai', 'id_pegawai');
    }
}
