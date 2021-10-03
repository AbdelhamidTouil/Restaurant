<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;

class ChefController extends Controller
{
       //Show Chef

       public function ShowChef()
       {
           $data = Chef::all();
           $datachef = Chef::all();
           return view('Admin.Chef.ShowChef',compact('data','datachef'));
       }
   
        //Delete Chef
   
        public function DeleteChef($id)
        {
            $data = Chef::find($id);
            $data->delete();
            return redirect()->back();
        }

           //Add Chef
   
           public function AddChef()
           {
              return view('Admin.Chef.AddChef');
           }

             //Store Food
      
      public function StoreChef(request $request)
      {
          $data = new chef;
          $image =$request->image;
          $imagename = time().'.'.$image->getClientOriginalExtension();
          $request->image->move('images/Chef',$imagename);

$data->image =$imagename;
$data->name=$request->name;
$data->speciality =$request->speciality;
$data->save();
//Session::flash('flash_message', '<b>Well done!</b> You successfully logged in to this website.');
//Session::flash('flash_type', 'alert-success');
return redirect()->back();

      }


       //EditChef
   
       public function EditChef($id)
       { 
           $data = Chef::find($id);
          return view('Admin.Chef.EditChef',compact('data'));
       }


       //Update Chef
         public function UpdateChef(request $request,$id)
      {
          $data = Chef::find($id);
          $image =$request->image;
          $imagename = time().'.'.$image->getClientOriginalExtension();
          $request->image->move('images/Chef',$imagename);

$data->image =$imagename;
$data->name=$request->name;
$data->speciality =$request->speciality;
$data->save();
return redirect()->back();

      }
}
