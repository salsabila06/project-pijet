<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    protected $table='pengguna';
    protected $fillable=['username','jenis_kelamin','tanggal_lahir','email','no_telp','no_ktp','alamat','domisili'];
    protected $guarded='id';
}
