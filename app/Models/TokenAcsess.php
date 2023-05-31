<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenAcsess extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'password_resets';

    protected $fillable = ['email', 'token'];

}
