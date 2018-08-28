<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('nama');
            $table->string('kodeunitkerja');
            $table->string('unitkerja');
            $table->string('jenistemuan');
            $table->string('area');
            $table->string('lokasi');
            $table->string('tanggal');
            $table->string('deskripsi');
            $table->string('rekomendasi')->nullable();
            $table->string('evidence')->nullable();
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
        Schema::dropIfExists('karyawans');
    }
}
