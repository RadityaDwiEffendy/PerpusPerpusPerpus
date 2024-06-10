<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['author','judul', 'image_url', 'deskripsi','url','paragraf1', 'paragraf2', 'paragraf3', 'paragraf4', 'rating'];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'book_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


}
