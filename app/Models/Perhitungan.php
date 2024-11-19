<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perhitungan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "perhitungan_hasils";

    protected $guarded = [];

    public function supplier(): BelongsTo
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
