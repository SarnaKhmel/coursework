<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    protected $user;
    public function __construct(){

        $this->middleware('auth');
    }

        public function showUser()
        {
        //return view('userStore.user');
        if (Auth::check()){
            $id = Auth::id();
            $data = User::where('id', $id)->get()->toArray();
            return view('Shop.UserStore.user',['data'=>$data]);
        }
        return "Error, ";
        }

        public function showCreate()
        {
        if(Auth::check()){
            return view('Shop.UserStore.showCreate');
        } else return "Error";
        }

}
