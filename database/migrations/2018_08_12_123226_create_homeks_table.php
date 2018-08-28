<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('perustansi');
            $table->string('role');
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
        Schema::dropIfExists('homeks');
    }
}
