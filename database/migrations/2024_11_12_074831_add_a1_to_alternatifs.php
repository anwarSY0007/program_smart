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
            $table->renameColumn('niali', 'a1');
            $table->string('a2')->default(0);
            $table->string('a3')->default(0);
            $table->string('a4')->default(0);
            $table->string('a5')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alternatifs', function (Blueprint $table) {
            $table->renameColumn('niali', 'a1');
            $table->dropColumn('a2');
            $table->dropColumn('a3');
            $table->dropColumn('a4');
            $table->dropColumn('a5');
        });
    }
};
