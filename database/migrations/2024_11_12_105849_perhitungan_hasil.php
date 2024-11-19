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
        Schema::create('perhitungan_hasils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hasil_id')->constrained('hasils')->onDelete('cascade');
            $table->foreignId('alternatif_id')->constrained('alternatifs')->onDelete('cascade');
            $table->foreignId('variabel_id')->constrained('variabels')->onDelete('cascade');
            $table->decimal('a1', 8, 2)->nullable();
            $table->decimal('a2', 8, 2)->nullable();
            $table->decimal('a3', 8, 2)->nullable();
            $table->decimal('a4', 8, 2)->nullable();
            $table->decimal('a5', 8, 2)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perhitungan_hasils');
    }
};
