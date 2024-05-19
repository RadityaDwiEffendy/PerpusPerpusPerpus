<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswas extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'username',
        'password',
        'role_id',
    ];

    protected $attributes = [
        'role_id' => 2
    ];
}
