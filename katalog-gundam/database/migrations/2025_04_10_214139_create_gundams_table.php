<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gundams', function (Blueprint $table) {
            $table->id();
            $table->string('nama_model');
            $table->string('seri');
            $table->text('deskripsi');
            $table->decimal('harga', 12, 2);
            $table->integer('stok');
            $table->string('grade');
            $table->integer('tinggi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gundams');
    }
};