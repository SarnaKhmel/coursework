<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;

class OtherController extends Controller
{
    public function show404()
    {
        return view('Shop.OtherStore.404');
        //static page;
    }
    public function showQuestion(){
        return view('Shop.OtherStore.Question');
        //no static page;
    }
    public function showAbout(){
        return view('Shop.OtherStore.About');
        //static page;
    }
    public function showHowBay(){
        return view('Shop.OtherStore.HowToBay');
        //static page;
    }
    public function showHowSell(){
        return view('Shop.OtherStore.HowToSell');
        //static page;
    }
}
