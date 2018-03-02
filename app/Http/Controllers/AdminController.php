<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    public function showAdminMenu(){
        if(Auth::user()->moderator){
            return view('Shop.AdminStore.AdminMenu');
        }
        return view('Shop.OtherStore.404');
    }

    public function showAdminAdvertisementCustomer()
    {
        if(Auth::user()->moderator){
//
            return view('Shop.AdminStore.adminAdvertisementCustomer');
        } else return view('Shop.OtherStore.404');
    }

    public function showAdminAdvertisementShop()
    {
        if(Auth::user()->moderator){
            return view('Shop.AdminStore.adminAdvertisementShop');
        } else return view('Shop.OtherStore.404');
    }
    public function showAdminQuestion()
    {
        if(Auth::user()->moderator){
            return view('Shop.AdminStore.adminQuestion');
        } else return view('Shop.OtherStore.404');
    }
    public function  adminUsers(){
       // if(Auth::user()->moderator){
            return view('Shop.AdminStore.adminUsers');
       // } else return view('Shop.OtherStore.404');
    }
    public function showAdminCreate(){
        if(Auth::user()->moderator){
            return view('Shop.AdminStore.adminCreate');
        }else return view('Shop.OtherStore.404');
    }

}
