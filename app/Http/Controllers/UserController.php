<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserContoller;
use App\Models\User;

class UserController extends Controller
{
    //Show USer

    public function ShowUser()
    {
        $data = User::all();
        return view('Admin.User.ShowUser',compact('data'));
    }

     //Delete USer

     public function Delete($id)
     {
         $data = User::find($id);
         $data->delete();
         return redirect()->back();
     }

       //Search 
       public function SearchUser(Request $request)
       {
          $search = $request->search;
          $data = User::where('name','like','%'.$search.'%')->get();
  
         return view('Admin.User.ShowUser',compact('data'));
       }
}
