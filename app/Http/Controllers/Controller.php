<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Proposal;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function dashboard()
    {
        return view('dashboard2');
    }
    public function index()
    {
        $perdagangan = Proposal::where('id_kategori','1')->get();
        $peternakan = Proposal::where('id_kategori','2')->get();
        return view('index',compact('perdagangan','peternakan'));
        
    }

    public function edukasi_peternak(){
        return view('user.edukasi_peternak');
    }

    public function edukasi_investor(){

    }
    
}
