<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Investasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Investasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_ktp_pebisnis');
            $table->string('no_ktp_pemodal');
            $table->string('namafoto');
            $table->integer('jumlah');
            $table->integer('proposal_id');
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
        Schema::dropIfExists('Investasi');
        
    }
}
