<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulasan', function (Blueprint $table) {
            $table->increments('IdUlasan'); 
            
            // Nama Pengguna
            $table->string('NamaSiswa');  // Menyimpan nama pengguna langsung
            
            // Universitas
            $table->string('Universitas');  // Universitas pengguna yang diinputkan form
            
            // ID Kursus
            $table->unsignedInteger('IdKursus');  // Foreign key untuk kursus
            $table->tinyInteger('Rating');  // Rating bintang, disimpan sebagai angka
            
            // Komentar
            $table->text('Komentar');  // Komentar pengguna

            $table->timestamps();  // Tanggal pembuatan dan update ulasan
            
            // Menambahkan relasi
            $table->foreign('IdKursus')->references('IdKursus')->on('kursus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ulasan');
    }
};
