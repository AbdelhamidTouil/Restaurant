<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    //Show Dashbord
public function ShowDashbord(){
    return view('Admin.Dashbord.ShowDashbord');
}
}
