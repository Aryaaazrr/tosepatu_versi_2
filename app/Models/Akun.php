<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Akun extends Model 
{
    use HasFactory;
    use AuthenticableTrait;

    protected $table = 'akun';

    // protected $guaarded;
    protected $fillable = [
        'email',
        'password',
    ];
}
