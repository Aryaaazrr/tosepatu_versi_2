<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'layanan';

    protected $fillable = ['id_layanan', 'nama_layanan', 'harga_layanan', 'foto_layanan', 'description', 'users_id'];

    public function users()
    {
        return $this->hasMany(User::class, 'users_id');
    }
    
    public function akses_layanan()
    {
        return $this->hasMany(AksesLayanan::class);
    }
    
    public function wilayah()
    {
        return $this->belongsToMany(Wilayah::class, 'akses_layanan');
    }

}
