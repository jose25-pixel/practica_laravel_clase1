<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class msscontroller extends Controller
{
    public function store(Request $request){
         return $request->get('name');
    }
}
