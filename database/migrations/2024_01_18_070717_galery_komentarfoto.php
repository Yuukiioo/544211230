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
        Schema::create('Galery_komentarfoto', function (Blueprint $table) {
            $table->id();
            $table->integer('kometarID');
            $table->integer('fotoID');
            $table->integer('UserID');
            $table->text('isikomentarID');
            $table->date('Tanggalkomentar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Galery_komentarfoto');
    }
};
