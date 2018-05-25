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
<<<<<<< HEAD

    public function verifikasiInvestasi($id)
    {
        DB::table('investasi')
            ->where('id', $id)
            ->update(['status' => 1]);
    }

    public function batalInvestasi($id)
    {
        DB::table('investasi')
            ->where('id', $id)
            ->update(['status' => 0]);
    }
=======
    
   public function verifikasiInvestasi($id)
   {
       DB::table('investasi')
           ->where('id', $id)
           ->update(['status' => 1]);
   }

   public function batalInvestasi($id)
   {
       DB::table('investasi')
           ->where('id', $id)
           ->update(['status' => 0]);
   }
>>>>>>> master
}
