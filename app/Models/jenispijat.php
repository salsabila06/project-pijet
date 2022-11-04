<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenispijat extends Model
{
    use HasFactory;
    protected $table='jenispijat';
    protected $fillable=['jasa_pijat','harga'];
    protected $guarded='id';

    public function pemesanan()
    {
        return $this->hasMany(pemesanan::class);
    }
}
