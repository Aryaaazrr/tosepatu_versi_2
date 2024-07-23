<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;

    protected $table = 'detail_pesanan';
    
    protected $fillable = ['*'];

    protected $guarded = [];

    public function transaksi()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
