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
        Schema::create('galery_album', function (Blueprint $table) {
            $table->increments('AlbumID')->primarykey();
            $table->string('NamaAlbum');
            $table->text('deskripsi');
            $table->date('Tanggaldibuat');
            $table->integer('UserID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery_album');
    }
};
