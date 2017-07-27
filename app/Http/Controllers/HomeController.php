<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {

    $user = Auth::user();

     $record = $user->diary;


      return view('home')->with(['record'=>$record, 'user'=>$user]);

    }
    public function showlogin()
    {

   return view('auth.login');

    }
    public function showProfile()
    {
        return view('profile');
    }


}
