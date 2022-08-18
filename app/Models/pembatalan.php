<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembatalan extends Model
{
    use HasFactory;

    protected $table='pembatalan';
    protected $guarded='id';

    public function scopeFilters($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query,$search){
            return $query->where('username', 'like', "%{$search}%")
                ->orwhere('email', 'like', "%{$search}%");
        });
    }

}
