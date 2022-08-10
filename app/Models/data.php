<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{

    use HasFactory;

    protected $table='data';
    protected $fillable=['username','first_name','last_name','email','password'];
    protected $guarded='id';

    public function verifikasi()
    {
        return $this->belongsTo(verifikasi::class);
    }

}
