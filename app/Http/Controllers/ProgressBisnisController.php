<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProgressBisnis;
use App\Proposal;
use Auth;

class ProgressBisnisController extends Controller
{
    public function index()
    {   $progres = ProgressBisnis::where('no_ktp_pebisnis',Auth::User()->no_ktp)->get();
        // dd($progres);
        return view('progress.index',compact('progres'));
    }
    public function add()
    {
        return view('progress.create');
    }
    // 'namafoto', 'keterangan', 'no_ktp_pebisnis','tgl_progres','proposal_id',
    public function store(Request $request)
    {
        $progres = new ProgressBisnis;
        $progres->keterangan = $request->get('keterangan');
        $progres->no_ktp_pebisnis = Auth::User()->no_ktp;
        $progres->tgl_progres = $request->get('tanggal');
        $p = Proposal::where('no_ktp_pebisnis',$progres->no_ktp_pebisnis)->first();
        $progres->proposal_id = $p->id;
        if (Input::hasFile('foto') ) 
            {  
                $pic = Input::file('foto');
                $progres->namafoto = time() . '.' .$pic->getClientOriginalName();       
                Image::make($pic)->resize(300,300)->save(public_path('/progresss/'.$progres->namafoto));
            }
        $progres->save();
        return redirect()->action('ProgressBisnisController@index')->with('sukses', 'Progress Bisnis Berhasil Ditambahkan');
            
    }
    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete($id)
    {
        $del = ProgressBisnis::findorfail($id);
        $del->delete();
        return redirect()->action('ProgressBisnisController@index')->with('sukses', 'Progress Bisnis Berhasil Dihapus');
        
    }

}
