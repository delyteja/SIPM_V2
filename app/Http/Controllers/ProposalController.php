<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Response as HttpResponse;
use App\Proposal;
use App\User;

use Auth;
class ProposalController extends Controller
{
    
    public function create()
    {
    	return view('proposal.create');
    }

    public function store(Request $request)
    {              
            $proposal = new Proposal;
            $proposal['no_ktp_pebisnis'] = Auth::user()->no_ktp ;
	    	$proposal['namausaha']=$request->namausaha;
            $proposal['id_kategori']=$request->id_kategori;
	    	$proposal['kebutuhan_dana']=$request->kebutuhan_dana;
	    	$proposal['lokasi']=$request->lokasi;
            $proposal['diskripsi']=$request->diskripsi;
    	    if (Input::hasFile('foto') ) 
            {  
                $pic = Input::file('foto');
                $proposal['namafoto'] = time() . '.' .$pic->getClientOriginalName();       
                Image::make($pic)->resize(300,300)->save(public_path('/foto/'.$proposal->namafoto));
                $proposal['typefoto']=$pic->getClientMimeType();
            }
            if(Input::hasFile('proposal'))
            {   $file = $request->proposal;
                $filename = $proposal['no_ktp_pebisnis'].' '.$request->proposal->getClientOriginalName();
                $proposal['namaproposal']=$filename;
                $uploadPath = public_path('/proposal');
                $file->move($uploadPath, $filename);
            }

    	$proposal->save();
        return redirect()->action('UserController@index')->with('sukses', 'Proposal Anda Berhasil Ditambahkan');
    	
    }

    public function edit($id)
    {
        //
        $posts = Proposal::findorfail($id);
       return view ('proposal.edit',compact('posts'));

    }

    public function update(Request $request,$id)
    {  //$temp=Proposal::where('id','like','$id');
       $posts = Proposal::findorfail($id);
       // $tempnama=$posts->namafoto;
       // $temptipe=$posts->typefoto;
        
        if (Input::hasFile('foto')) 
        {
            $pic = Input::file('foto');
            $posts->namafoto= time() . '.' .$pic->getClientOriginalName();
            
            //$pic->move(public_path().'/foto/'.$pic->getClientOriginalName());
            Image::make($pic)->resize(300,300)->save(public_path('/foto/'.$posts->namafoto));
            $posts->typefoto=$pic->getClientMimeType();
        }
    
            $posts->email=$request->email;
            $posts->namausaha=$request->namausaha;
            $posts->biaya=$request->biaya;
            $posts->tempatusaha=$request->tempatusaha;
            $posts->diskripsi=$request->diskripsi;
            $posts->kategori=$request->kategori;

            $posts->update($request->all());
            return redirect('/index');

       
    }

    
    public function delete($id,$token)
    {
        $del = Proposal::findorfail($id);
        $del->delete();

        switch ($token) {
            case '1':
                return redirect('index') ;
                break;
            
            case '2':
                return redirect('admin') ;
                break;
        }
        
    }

    public function detail($nama,$dana)
    {
        $proposal = Proposal::where('namausaha','like',$nama)->where('kebutuhan_dana',$dana)->first();
        $pebisnis = User::where('no_ktp',$proposal->no_ktp_pebisnis)->first();
        return view('proposal.main',compact('proposal','pebisnis'));
    }


          
}
