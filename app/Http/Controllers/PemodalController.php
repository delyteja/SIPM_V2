<?php

namespace App\Http\Controllers;

use App\Investasi;
use Illuminate\Http\Request;

use Auth;

class PemodalController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');     // 
    }
    
    public function index() {
    	return view('pemodal.index');
    }

    public function PakDani () {
    	return view('pemodal.PakDani');
    }

    public function laporan() {
    	return view('pemodal.laporan');
    }

    public function tambah_laporan()
    {
        return view('pemodal.tambah_laporan');
    }

    public function do_investasi(Request $request)
    {
        $investasi = new Investasi;
        $jumlah_investasi = $request->jumlah_investasi;
        $proposal_id = $request->proposal_id;

        $investasi->no_ktp_pebisnis = $request->no_ktp_pebisnis;
        $investasi->no_ktp_pemodal = Auth::user()->no_ktp;
        $investasi->proposal_id = $proposal_id;

        $investasi->save();

        DB::table('proposal')->increment('dana_terkumpul', $jumlah_investasi, ['id' => $proposal_id]);
    }
}
