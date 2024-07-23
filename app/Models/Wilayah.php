<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $table = 'wilayah';

    protected $guarded = [];

    public function users()
    {
        return $this->hasOne(User::class);
    }

    public function users_mobile()
    {
        return $this->hasOne(User::class);
    }

    public function akses_layanan()
    {
        return $this->hasMany(AksesLayanan::class);
    }

    public function layanan()
    {
        return $this->belongsToMany(Layanan::class, 'akses_layanan');
    }

    public function akses_berita()
    {
        return $this->hasMany(AksesBerita::class);
    }

    public function berita()
    {
        return $this->belongsToMany(Berita::class, 'akses_berita');
    }

    public function pesanan()
    {
        return $this->hasOne(Pesanan::class);
    }

    public function jam_operasional()
    {
        return $this->hasMany(JamOperasional::class);
    }
}
