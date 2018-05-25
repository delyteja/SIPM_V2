<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgressBisnis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProgressBisnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namafoto');
            $table->text('keterangan');
            $table->string('no_ktp_pebisnis');
            $table->date('tgl_progres');
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
        Schema::dropIfExists('ProgressBisnis');
        
    }
}
