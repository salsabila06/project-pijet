<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifikasi extends Model
{
    use HasFactory;

    protected $table='verifikasi';
    protected $fillable=['username','email','status','jenis_kelamin','tanggal_lahir','no_telp'];
}
