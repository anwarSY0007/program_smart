<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alternatif extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_alternatif',
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
    ];

    public function hasils()
    {
        return $this->hasMany(Hasil::class);
    }
}
