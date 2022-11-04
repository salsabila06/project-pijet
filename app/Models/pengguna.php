<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $fillable = ['username', 'first_name', 'last_name', 'password', 'jenis_kelamin', 'tanggal_lahir', 'email', 'no_telp', 'no_ktp', 'alamat', 'domisili'];
    protected $guarded = 'id';

    public function pemesanan()
    {
        return $this->hasMany(pemesanan::class);
    }


    public function verifikasi()
    {
        return $this->belongsTo(verifikasi::class);
    }

    public function scopeFilters($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('username', 'like', "%{$search}%")
                ->orwhere('email', 'like', "%{$search}%")
                ->orwhere('no_telp', 'like', "%{$search}%")
                ->orwhere('no_ktp', 'like', "%{$search}%");
        });
    }


}
