<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jasaPijat extends Model
{
    use HasFactory;

    protected $fillable=['pemijat','jasa_pijat','harga'];
}
