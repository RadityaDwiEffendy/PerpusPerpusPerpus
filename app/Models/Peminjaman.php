<?php

namespace App\Models;

use App\Models\book;
use App\Models\User;
use App\Models\Siswas;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;

    

    protected $table = 'peminjaman';

    protected $fillable = [
        'siswa_id',
        'book_id',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'status',
        'denda'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id','id');
    }

    public function user()
    {
        return $this->belongsTo(Siswas::class, 'siswa_id', 'id');
    }

    public function calculateDenda()
    {
        $today = Carbon::now();
        $dueDate = Carbon::parse($this->tanggal_pengembalian);

        if($today->greaterThan($dueDate)){
            $dayslater = $today->diffInDays($dueDate);
            return $dayslater * 2000;
        }
        return 0;
    }

}