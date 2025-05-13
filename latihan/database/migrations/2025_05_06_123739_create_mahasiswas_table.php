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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id(); //pk, ai, biginteger(20)
            $table->char('npm', 11)->unique();
            $table->string('nama', 100); //panjang default string:255
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir'); //default date: yyyy-mm-dd
            $table->timestamps(); //created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
