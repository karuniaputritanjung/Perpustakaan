<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id');

            $table->string('id_pegawai', 100)->nullable()->default();
            $table->string('nama', 100)->nullable()->default();
            $table->enum('jenis_kelamin', ['Pria', 'Wanita'])->nullable();
            $table->string('no_hp', 100)->nullable()->default();
            $table->string('alamat', 100)->nullable()->default();


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
        Schema::dropIfExists('pegawais');
    }
}
