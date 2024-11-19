<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hasil extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pasien_id',
        'alternatif_id',
        'variabel_id',
    ];

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class);
    }
    public function alternatif(): BelongsTo
    {
        return $this->belongsTo(Alternatif::class);
    }
    public function variabel(): BelongsTo
    {
        return $this->belongsTo(Variabel::class);
    }
}
