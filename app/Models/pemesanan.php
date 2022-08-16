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
   
    $query->when($filters['search'] ?? false, function ($query,$search){
            return $query->where('username', 'like', "%{$search}%")
                         ->orwhere('jasa_pijat', 'like', "%{$search}%");
        });
}
