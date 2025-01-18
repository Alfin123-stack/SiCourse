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
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('IdSiswa'); 
            $table->string('namasiswa', 30); 
            $table->string('email', 50); 
            $table->string('NoHp', 15)->nullable(); // Set NoHp bisa bernilai null
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable(); // Set jenis_kelamin bisa bernilai null
            $table->string('foto')->nullable(); // Foto tetap nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
