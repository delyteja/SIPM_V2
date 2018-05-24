<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
	protected $table = 'proposal';

    protected $fillable = [
        'no_ktp_pebisnis', 
        'namausaha',
        'id_kategori',
        'kebutuhan_dana',
        'lokasi',
        'namafoto',
        'typefoto',
        'diskripsi',
        'namaproposal'
    ];
}
