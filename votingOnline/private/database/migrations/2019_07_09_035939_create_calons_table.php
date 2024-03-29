<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calons', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nik', '16')->unique();
            $table->string('nama');
            $table->text('foto');
            $table->text('deskripsi');
            $table->string('pendidikan');
            $table->text('pengalaman');
            $table->text('keterangan');
            $table->enum('status',['1','0']);
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
        Schema::dropIfExists('calons');
    }
}
