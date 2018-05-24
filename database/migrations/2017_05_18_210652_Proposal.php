<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proposal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_ktp_pebisnis');
            $table->string('namausaha');
            $table->string('id_kategori');
            $table->integer('kebutuhan_dana');
            $table->string('lokasi');
            $table->string('namafoto');
            $table->string('typefoto');
            $table->string('diskripsi');
            $table->string('namaproposal');
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
        Schema::dropIfExists('proposal');
    }
}
