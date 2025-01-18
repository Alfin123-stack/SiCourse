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
        Schema::create('mentor', function (Blueprint $table) {
            $table->increments('IdMentor'); 
            $table->string('namaMentor', 30); 
            $table->string('email', 50); 
            $table->string('NoHp', 15); 
            $table->string('Deksripsi', 15);
            $table->enum('jenis_kelamin', ['L', 'P']); 
            $table->string('Skill',30);
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
        Schema::dropIfExists('mentor');
    }
};
