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
        Schema::create('galery_foto', function (Blueprint $table) {
            $table->integer('fotoID')->primarykey();
            $table->string('JudulFoto');
            $table->text('Deskripsifoto');
            $table->date('Tanggalunggah');
            $table->string('Lokasifoto');
            $table->integer('AlbumID');
            $table->integer('UserID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery_foto');
    }
};
