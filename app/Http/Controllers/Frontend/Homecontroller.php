<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\nav_bar;
use App\Models\nav_zernav;
use App\Models\zer_nav;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index()

    
    {
       ;
        $id_nav=nav_zernav::all();
        $zer_nav_all=zer_nav::all();
        $nav_all=nav_bar::all();
        $prodacts = File::all();
        
        return view('frontend.home.index',compact('zer_nav_all','nav_all','id_nav','prodacts'));
    }
}
