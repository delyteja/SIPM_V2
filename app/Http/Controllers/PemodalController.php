<?php

namespace App\Http\Controllers;

use App\Investasi;
use Illuminate\Http\Request;
use App\Proposal;
use App\User;
use Input;

use Auth;

class PemodalController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');     // 
    }
    
    public function index() {
        $perdagangan = Proposal::where('id_kategori','1')->get();
        $peternakan = Proposal::where('id_kategori','2')->get();
        return view('pemodal.index',compact('perdagangan','peternakan'));
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
        // inisialisasi variabel
        $jumlah_investasi = $request->jumlah_investasi;
        $proposal_id = $request->proposal_id;

        $investasi['no_ktp_pebisnis'] = $request->no_ktp_pebisnis;
        $investasi['no_ktp_pemodal'] = Auth::user()->no_ktp;
        $investasi['proposal_id'] = $proposal_id;
        $investasi['jumlah'] = $jumlah_investasi;

        if (Input::hasFile('bukti_foto'))
        {
            $bukti_foto = $request->bukti_foto;
            $nama_file = time() . "-" . $bukti_foto->getClientOriginalName();
            $investasi['namafoto'] = $nama_file;
            $uploadPath = public_path('/bukti_investasi');
            $bukti_foto->move($uploadPath, $nama_file);
        }

        $investasi->save();
        //DB::table('proposal')->increment('dana_terkumpul', $jumlah_investasi, ['id' => $proposal_id]);        // khusus untuk update ke tabel proposal
        return redirect()->action('PemodalController@index')->with('sukses', 'Investasi anda berhasil dikirim');
    }

    public function detail($usaha,$dana)
    {  
        $proposal = Proposal::where('namausaha','like',$usaha)->where('kebutuhan_dana',$dana)->first();
        $pebisnis = User::where('no_ktp',$proposal->no_ktp_pebisnis)->first();
        return view('pemodal.proposaldetail',compact('proposal','pebisnis'));

    }
}
