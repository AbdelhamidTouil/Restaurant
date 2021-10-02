<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orderconfirm(Request $request)
    {
        
 foreach($request->foodname as $key=>$foodname)
 {
     $data=new order;
     $data->foodname=$foodname;
     $data->price=$request->price[$key];
     $data->quantity=$request->quantity[$key];
     $data->name=$request->name;
     $data->phone=$request->phone;
     $data->addresse=$request->addresse;
     $data->save();
 }
 return redirect()->back();
    }

    //Show Order
    public function ShowOrder()
    {
        $data = Order::all();
        return view('Admin.Order.ShowOrder',compact('data'));
    }

     //Search Order
     public function SearchOrder(Request $request)
     {
        $search = $request->search;
        $data = Order::where('name','like','%'.$search.'%')->get();

       return view('Admin.Order.ShowOrder',compact('data'));
     }

     //Delete Order
     //Show Order
    public function DeleteOrder($id)
    {
        $data = Order::find($id);
        $data->delete();
        return redirect()->back();
    }
    
}
