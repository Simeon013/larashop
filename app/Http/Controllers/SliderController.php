<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function addslider(){
        return view('admin.ajouterslider');
    }

    public function saveslider(Request $request){

    }
}
