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
    public function __construct(Diary $diary)
    {
        $this->middleware('auth');
        $this->diary = $diary;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    $user = Auth::user();

     //$record = $user->diary;


      //return view('home')->with(['record'=>$record]);
        return view('user.dashboard')->with(['user'=>$user]);

    }
    public function showlogin()
    {

        return view('auth.login');


    }
    public function AddBoard()
    {

        //return a view for users to fill the board name
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


    }
    public function edit($id)
    {
//$diary = new Diary;
$record = $this->diary->find($id);
return view('layouts.edit', compact('record'));

//eturn view('layouts.edit', compact('record'));

    }

   public function update(Request $request, $id)
   {

       $diaries = $this->diary->find($id);
       $diaries->error = $request->error;
       $diaries->fix = $request->fix;
       $result = $diaries->save();
       if ($result == true) {
           echo "shit just got updated";

       }else{
           echo "something is wrong";
       }


   }
   public function delete($id)
   {
$diaries = $this->diary->find($id);
$result = $diaries->delete();
if($result == true)
{
    echo "Diary has been deleted";
}else
{
    echo "could not delete, there was an issue";
}
   }

}
