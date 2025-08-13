<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request ){
       $name = $request->cookie("user_name");
        return view ("dashboard", ["name"=>$name]);
    }
}
