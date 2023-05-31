<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $guarded = [];

    public function detailTransaksi()
    {
        return $this->hasMany(DetailPesanan::class);
    }

    public function metode()
    {
        return $this->belongsTo(MetodePengiriman::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
