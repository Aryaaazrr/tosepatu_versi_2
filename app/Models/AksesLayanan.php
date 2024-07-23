<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesLayanan extends Model
{
    use HasFactory;

    protected $table = 'akses_layanan';

    protected $guarded = [];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }

    public function layanan()
    {
        return $this->belongsTo(Produk::class);
    }
}
