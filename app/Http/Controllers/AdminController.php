<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use App\Proposal;

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
    
    
}
