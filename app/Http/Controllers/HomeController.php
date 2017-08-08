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
    public function show()
    {

    $user = Auth::user();

     $record = $user->diary;


      return view('home')->with(['record'=>$record]);

    }


    public function save(Request $request)

    {

$user = Auth::user();
$error = $request->error;
$fix = $request->fix;
$diary = new Diary();
$diary->error = $error;
$diary->fix = $fix;
$diary->user_id = Auth::id();
$diary->save();

//$result = $diary->save();

/**
if($result==true)
{
    return "saved";
}else{
    return "not saved";
}
//Diary::create($input);


//return "Inserted";
 /**
$diary = new Diary();
$diary->error = $error;
$diary->fix = $fix;
$diary->save();
  **/

    }
    public function edit($id)
    {
$diary = new Diary;
$record = $diary->find($id);
return view('layouts.edit', compact('record'));

//eturn view('layouts.edit', compact('record'));

    }

   public function update($id)
   {

   }


}
