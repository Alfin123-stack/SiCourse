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
        Schema::create('enrol', function (Blueprint $table) {
            $table->increments('IdEnrol'); 
            $table->unsignedInteger('IdSiswa'); // Relasi ke tabel siswa
            $table->unsignedInteger('IdKursus'); // Relasi ke tabel kursus
            $table->string('Status', 50); // Status pendaftaran
            $table->date('tanggal'); // Tanggal pendaftaran
            $table->decimal('price', 10, 2); // Harga kursus yang dibayar
            $table->enum('payment_method', ['bank-transfer', 'credit-card', 'ewallet']); // Metode pembayaran
            $table->text('additional_notes')->nullable(); // Catatan tambahan (opsional)
            $table->timestamps();

            // Relasi ke tabel siswa dan kursus
            $table->foreign('IdSiswa')->references('IdSiswa')->on('siswa')->onDelete('cascade');
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
        Schema::dropIfExists('enrol');
    }
};
