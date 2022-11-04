<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifikasi extends Model
{
    use HasFactory;

    protected $table='verifikasi';
    protected $guarded=['id'];

    public function pengguna()
    {
        return $this->hasMany(pengguna::class);
    }
}
