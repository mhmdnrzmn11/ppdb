<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeleksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seleksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registrasi_id');
            $table->string('avg_nilai');
            $table->bigInteger('diterima_jurusan');
            $table->timestamps();

            $table->foreign('registrasi_id')
                  ->references('id')->on('registrasis')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seleksis');
    }
}
