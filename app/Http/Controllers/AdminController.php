<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function datatables(){
        return view('admin.datatables');
    }

    public function validation(){
        return view('admin.validation');
    }
}
