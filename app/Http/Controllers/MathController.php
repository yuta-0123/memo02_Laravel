<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MathController extends Controller
{
    //
    public function sum($x,$y){
        $sum =$x+$y;'sum',['x'=>$x,'y'=>$y,'sum'=>$sum]);
    }
}
