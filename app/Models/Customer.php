<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $fillable = [
        'nama_customer',
        'alamat',
        'jk'
    ];

    public function keluhan(){
        return $this->hasMany(Keluhan::class, 'id_customer', 'id_customer');
    }
}
