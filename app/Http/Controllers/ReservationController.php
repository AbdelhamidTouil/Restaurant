<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;

class ReservationController extends Controller
{
      //Show Reservation

      public function ShowReservation()
      {
          $data = Reservation::all();
          return view('Admin.Reservation.ShowReservation',compact('data'));
      }
  
       //Delete Reservation
  
       public function DeleteReservation($id)
       {
           $data = Reservation::find($id);
           $data->delete();
           return redirect()->back();
       }
 
     
 
       //Store Reservation
       
       public function StoreReservation(request $request)
       {
           $data = new reservation;
 
 $data->name=$request->name;
 $data->phone = $request->phone;
 $data->email =$request->email;

 $data->guest=$request->guest;
 $data->date = $request->date;
 $data->time =$request->time;
 $data->message =$request->message;
 $data->save();
 return redirect()->back();
 
       }

      
      
       

}
