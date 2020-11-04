<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $day=[
            (object)["day"=>"Sunday","open"=>"Closed"],
            (object)["day"=>"Monday","open"=>"7:00 AM to 8:00 PM"],
            (object)["day"=>"Tuesday","open"=>"7:00 AM to 8:00 PM"],
            (object)["day"=>"Wednesday","open"=>"7:00 AM to 8:00 PM"],
            (object)["day"=>"Thursday","open"=>"7:00 AM to 8:00 PM"],
            (object)["day"=>"Friday","open"=>"7:00 AM to 8:00 PM"],
            (object)["day"=>"Saturday","open"=>"9:00 AM to 5:00 PM"],
        ];
        return view("/pages/store",compact("day"));
    }
}
