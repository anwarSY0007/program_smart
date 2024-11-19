<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('alamat')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('nomor_rekam_medis')->unique()->nullable(); // Menambahkan nullable
            $table->timestamp('tanggal_daftar')->useCurrent();
            $table->text('alergi')->nullable();
            $table->text('riwayat_penyakit')->nullable();
            $table->enum('status_asuransi', ['Aktif', 'Tidak Aktif'])->default('Aktif');
            $table->enum('status_pernikahan', ['Belum Menikah', 'Menikah', 'Cerai', 'Janda/Duda'])->default('Belum Menikah');
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O', 'Tidak Diketahui'])->default('Tidak Diketahui');
            $table->integer('tinggi_badan')->nullable();  // dalam cm
            $table->integer('berat_badan')->nullable();   // dalam kg
            $table->text('catatan_khusus')->nullable();
            $table->enum('status_kesehatan', ['Sehat', 'Sakit', 'Dalam Perawatan'])->default('Sehat');
            $table->date('tanggal_periksa_terakhir')->nullable();
            $table->softDeletes(); // Menambahkan soft deletes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
