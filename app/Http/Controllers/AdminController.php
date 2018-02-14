<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
class AdminController extends Controller
{
    public function showAdminMenu(){
        if(Auth::check()&& Auth::user()->moderator){
            return view('Shop.AdminStore.AdminMenu');
        }
        return view('Shop.OtherStore.AdminMenu');
    }

    public function showAdminAdvertisementCustomer()
    {
        if(Auth::check() && Auth::user()->moderator){

            if (Auth::check()){
                $user_id = Auth::id();
                $data = User::where('user_id', $user_id)
                    ->get()->toArray();
                return view('tasks',['data'=>$data]);
            }
            return "Error, ";

            return view('Shop.AdminStore.adminAdvertisementCustomer');
        } else return view('Shop.OtherStore.404');
    }

    public function showAdminAdvertisementShop()
    {
        if(Auth::check() && Auth::user()->moderator){
            return view('Shop.AdminStore.adminAdvertisementShop');
        } else return view('Shop.OtherStore.404');
    }
    public function showAdminQuestion()
    {
        if(Auth::check() && Auth::user()->moderator){
            return view('Shop.AdminStore.adminQuestion');
        } else return view('Shop.OtherStore.404');
    }
    public function  showAdminUsers(){
        if(Auth::check() && Auth::user()->moderator){
            return view('Shop.AdminStore.adminUsers');
        } else return view('Shop.OtherStore.404');
    }
    public function showAdminCreate(){
        if(Auth::check() && Auth::user()->moderator){
            return view('Shop.AdminStore.adminCreate');
        }else return view('Shop.OtherStore.404');
    }

}
