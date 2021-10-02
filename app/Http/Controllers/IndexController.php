<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserContoller;
use App\Http\Controllers\FoodContoller;
use App\Http\Controllers\ChefContoller;
use App\Http\Controllers\ReservationContoller;
use App\Http\Controllers\CartContoller;
use App\Http\Controllers\OrderContoller;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Reservation;

class IndexController extends Controller
{
    //show Index

  /* public function Index()
    {
           return view('Index.Index');
      
    }*/

 
    public function Index()
    {
        
        if(Auth::id())
         {
             
             return redirect('redirect');
         }
     else
     {
        $data = Food::all();
        $datachef = Chef::all();
        return view('Index.Index',compact('data','datachef'));
     }
    }
    public function redirect(){
        $data =Food::all();
        $datachef = Chef::all();
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('Admin.Dashbord.ShowDashbord',compact('data','datachef'));
        }
        else
        {
            $user_id = Auth::id();
        $count = Cart::where('user_id',$user_id)->count();
        return view('Index.Index',compact('data','count','datachef'));
        }
    }

    //  

}
