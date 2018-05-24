<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressBisnis extends Model
{
    protected $table = 'ProgressBisnis';
   

    protected $fillable = array(
       'namafoto', 'keterangan', 'no_ktp_pebisnis','tgl_progres','proposal_id',
    );
}

