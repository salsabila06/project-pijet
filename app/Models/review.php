<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $table='review';
    protected $guarded=['id'];
    
    public function scopeFilters($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query,$search){
            return $query->where('first_name', 'like', "%{$search}%")
                         ->orwhere('Last_name', 'like', "%{$search}%")
                         ->orwhere('jasa_pijat', 'like', "%{$search}%");
        });
    }
}
