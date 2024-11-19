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
        Schema::table('alternatifs', function (Blueprint $table) {
            $table->float('a2')->default(0)->change();
            $table->float('a3')->default(0)->change();
            $table->float('a4')->default(0)->change();
            $table->float('a5')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alternatifs', function (Blueprint $table) {
            $table->string('a2')->default(0)->change();
            $table->string('a3')->default(0)->change();
            $table->string('a4')->default(0)->change();
            $table->string('a5')->default(0)->change();
        });
    }
};
