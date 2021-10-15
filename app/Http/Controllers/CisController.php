<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CisController extends Controller
{
    //
    public function index(){
        //get data from api /database
                  //$s        $s      $s    $s    $s
        $data = ['2564', '2563', '2562', '2561', '2560'];
        //dd($name);
        //set data to view
        return view('cis', ['years' => $name]);
    }
    public function getclass($year){
        //return 'class of ' . $year;
        return view('cisclass', ['year' => $year]);
    }
}
