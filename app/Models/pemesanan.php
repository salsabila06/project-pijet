<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    protected $table='pemesanan';
    protected $fillable=['username','pengguna_id','jenispijat_id','jenis_kelamin','waktu_booking','durasi_waktu','alamat','status'];
    protected $guarded='id';

    public function pengguna(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(pengguna::class);
    }

    /** @noinspection PhpUnused */
    public function jenispijat(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(jenispijat::class);
    }

    public function scopeFilters($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query,$search){
            return $query->where('username', 'like', "%{$search}%")
                         ->orwhere('jasa_pijat', 'like', "%{$search}%");
        });
    }



}
