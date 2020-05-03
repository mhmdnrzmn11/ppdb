<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBerkasPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_berkas_pesertas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('registrasi_id');
            $table->string('formulir_pendaftaran')->nullable();
            $table->string('fc_kk')->nullable();
            $table->string('fc_ktp_orangtua')->nullable();
            $table->string('fc_nisn')->nullable();
            $table->string('fc_raport')->nullable();
            $table->string('fc_ijazah')->nullable();
            $table->string('fc_skhun')->nullable();
            $table->string('pas_foto')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('data_berkas_pesertas');
    }
}
