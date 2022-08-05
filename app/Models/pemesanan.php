<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    protected $table='pemesanan';
    protected $fillable=['username','jasa_pijat','status'];
    protected $guarded='id';
}
