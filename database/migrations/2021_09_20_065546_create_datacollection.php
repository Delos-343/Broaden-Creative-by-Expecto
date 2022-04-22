<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatacollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datacollection', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('tgllahir');
            $table->string('email');
            $table->string('nomortelp');
            $table->string('jeniskelamin');
            $table->string('provinsi');
            $table->string('kotakabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('pekerjaan');
            $table->string('sosialmedia');
            $table->string('pengeluaranperbulan');
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
        Schema::dropIfExists('datacollection');
    }
}
