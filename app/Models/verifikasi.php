<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifikasi extends Model
{
    use HasFactory;

    protected $table='verifikasi';
    protected $fillable=['status',];
    protected $guarded=['id'];


    public function data()
    {
        return $this->hasMany(data::class);
    }
}
