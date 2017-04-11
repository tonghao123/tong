<?php

namespace App\Http\Controllers\Home\Intergral;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //传参
    public function intergral()
    {
        $visit=1;
        $visiter=array(
            array('icon'=>'1'),
        );
        $friend=array(
            array('icon'=>'1'),
        );
        return view('/Home/Intergral/index')->with('visit',$visit)->with('visiter',$visiter)->with('friend',$friend);
    }
}
