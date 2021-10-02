<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
     //Show Food

     public function ShowFood()
     {
         $data = Food::all();
         return view('Admin.Food.ShowFood',compact('data'));
     }
 
      //Delete Food
 
      public function DeleteFood($id)
      {
          $data = Food::find($id);
          $data->delete();
          return redirect()->back();
      }

      //AddFood
 
      public function AddFood()
      {
          return view('Admin.Food.AddFood');
      }

      //Store Food
      
      public function StoreFood(request $request)
      {
          $data = new food;
          $image =$request->image;
          $imagename = time().'.'.$image->getClientOriginalExtension();
          $request->image->move('images/food',$imagename);

$data->image =$imagename;
$data->name=$request->name;
$data->price = $request->price;
$data->description =$request->description;
$data->save();
return redirect()->back();

      }
 //Edit Food
 public function EditFood($id){
    $data = Food::find($id);
    return view('Admin.Food.EditFood',compact('data'));
 }
//Update Food

     public function UpdateFood(request $request,$id)
     {
         $data =Food::find($id);
         $image =$request->image;
         $imagename = time().'.'.$image->getClientOriginalExtension();
         $request->image->move('images/food',$imagename);

$data->image =$imagename;
$data->name=$request->name;
$data->price = $request->price;
$data->description =$request->description;
$data->save();
return redirect()->back();

     }

    



   
}
