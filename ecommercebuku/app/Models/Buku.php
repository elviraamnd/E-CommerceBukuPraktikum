<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'judul', 'kategori_id', 'stok', 'harga', 'deskripsi'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);

    }
}
