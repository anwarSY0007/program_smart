<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    /** @use HasFactory<\Database\Factories\PasienFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'nomor_telepon',
        'email',
        'nomor_rekam_medis',
        'tanggal_daftar',
        'alergi',
        'riwayat_penyakit',
        'status_asuransi',
        'status_pernikahan',
        'golongan_darah',
        'tinggi_badan',
        'berat_badan',
        'catatan_khusus',
        'status_kesehatan',
        'tanggal_periksa_terakhir',
    ];

    public function hasils()
    {
        return $this->hasMany(Hasil::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->nomor_rekam_medis)) {
                $model->nomor_rekam_medis = 'RM-' . uniqid(); // Menghasilkan nomor rekam medis otomatis
            }
        });
    }
}
