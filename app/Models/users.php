<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'login',
        'logo',
        'icone',
        'empresa',
        'senha',
        'status',
        'cod_estabel',
        'admin',
    ];
}
