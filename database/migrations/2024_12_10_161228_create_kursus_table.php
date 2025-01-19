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
        Schema::create('kursus', function (Blueprint $table) {
            $table->increments('IdKursus'); 
            $table->string('nama', 50); 
            $table->string('DeksripsiKursus', 255)->default('Deskripsi belum tersedia'); // Adjusted for longer description
            $table->string('InformasiTambahan', 50); 
            $table->unsignedInteger('IdMentor'); 
            $table->text('materi_kursus'); // Course material
            $table->string('jadwal_kursus', 50); // Course schedule
            $table->integer('lama_kursus'); // Duration of the course in hours
            $table->decimal('rating', 2, 1)->default(0); // Rating for the course
            $table->string('url_gambar', 255)->nullable(); // URL for the course image
            $table->integer('jumlah_peserta')->default(0); // Number of participants, defaulting to 0
            $table->decimal('harga_kursus', 10, 2); // New column for course price with 2 decimal points
            $table->timestamps();

            $table->foreign('IdMentor')->references('IdMentor')->on('mentor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kursus');
    }
};
