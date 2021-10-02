<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Models\Chef;
use App\Models\Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //Strore Cart
    public function StoreCart(Request $request,$id)
    {
        if(Auth::id())
        {

        
        $user_id = Auth::id();
        $food_id = $id;
        $quantity = $request->quantity;

        $data = new Cart;
        $data->quantity = $quantity;
        $data->food_id =$food_id;
        $data->user_id = $user_id;
        $data->save();
        return  redirect()->back();
        }
        else
        {
            return redirect('/login');
        }


    }

    //Show Cart
    public function ShowCart($id)
    {
        $data = Cart::all();
        $user_id = Auth::id();
        $count = Cart::where('user_id',$user_id)->count();
        $data = Cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
        $data2 = Cart::select('*')->where('user_id', '=', $id)->get();
        return view('Index.Cart.ShowCart',compact('data','count','data2'));
    }

  //Delete Cart
  public function DeleteCart($id)
  {
      $data2 = Cart::find($id);
      $data2->delete();
      return redirect()->back();
  }
    
}
