<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $portafoliooo=[
    [ 'title' =>'Proyecto #1'],
    [ 'title' =>'Proyecto #2'],
    [ 'title' =>'Proyecto #3'],
    [ 'title' =>'Proyecto #4'],
];

   return view('portafolio', compact('portafoliooo'));
    }

}
