<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    protected $table = 'investasi';

    protected $fillable = array(
    	'no_ktp_pebisnis',
    	'no_ktp_pemodal',
    	'proposal_id',
    	);
}
