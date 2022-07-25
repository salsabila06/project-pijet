<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table='data';
    protected $fillable=['first_name','last_name','email','password'];
    protected $guarded='id';
}
