<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use App\Proposal;
use App\Investasi;
use DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Proposal::All();
        return view('admins.admin', compact('posts'));
    }
    public function manageMessage()
    {
        $message = Message::All();
         return view('admins.message')->withMessages($message);
    }
    public function manageUser()
    {
        $user = User::All();
        return view('admins.user')->withUsers($user);
    }

    public function location($lokasi)
    { 
        return view('admins.location2',compact('lokasi'));
    }
    
    public function kelolaInvestasi()
    {
        $investasi = Investasi::All();
        return view('admins.investasi', compact('investasi'));
    }
    
   public function verifikasiInvestasi($id, $ktp, $jumlah)
   {

    $p = Investasi::findorfail($id);
    $p->status = 1;
    $p->save();

    $prop = Proposal::where('no_ktp_pebisnis', $ktp)->first();
    $prop->dana_terkumpul += $jumlah;
    $prop->save();

    return redirect()->action('AdminController@kelolaInvestasi')->with('sukses', 'Investasi berhasil diverifikasi');
    
    
   }

   public function batalInvestasi($id, $ktp, $jumlah)
   {
    
    $p = Investasi::findorfail($id);
    $p->status = 1;
    $p->save();

    $prop = Proposal::where('no_ktp_pebisnis', $ktp)->first();
    $prop->dana_terkumpul -= $jumlah;
    $prop->save();

    return redirect()->action('AdminController@kelolaInvestasi')->with('sukses', 'Investasi berhasil diverifikasi');

   }
}
