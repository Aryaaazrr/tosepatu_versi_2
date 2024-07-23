<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $guarded = [];

    public function akses_berita()
    {
        return $this->hasMany(AksesBerita::class);
    }
    
    public function wilayah()
    {
        return $this->belongsToMany(Wilayah::class, 'akses_berita');
    }
}
