<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variabel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_variabel',
        'bobot', // Pastikan untuk menambahkan kolom bobot di sini
    ];

    public function hasils()
    {
        return $this->hasMany(Hasil::class);
    }
}
