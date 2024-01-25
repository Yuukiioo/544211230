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
        Schema::create('galery_user', function (Blueprint $table) {
            $table->id();
            $table->integer('UserID');
            $table->string('username');
            $table->string('fotoID');
            $table->string('Email');
            $table->string('NamaLengkap');
            $table->text('Alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery_user');
    }
};
