<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use Illuminate\Support\Facades\Auth;
use DB;
use App\Prod;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    protected $user;
   // protected $prod;
    public function __construct(){

        $this->middleware('auth');
    }

        public function showUser()
        {
        //return view('userStore.user');
        if (Auth::check()){
            $id = Auth::id();
            $data = User::where('id', $id)->get()->toArray();
            return view('Shop.UserStore.UserInfo',['data'=>$data]);
        }
        return "Error, ";
        }


        public function showCreate()
        {
        if(Auth::check()){
            return view('Shop.UserStore.Create');
        } else return "Error";
        }

        public function createNewUserProduct(Request $request){

            //dd(Auth::user()->email);

            if(Auth::check()){
                $input=$request->only([
                    'name',
                    'email',
                    'phone',
                    'price',
                    'description',
                    'image'
                ]);

                $prod = new Prod();
                $prod -> user_email = Auth::user()->email;
                $prod -> user_id = Auth::user()->id;
               // $prod -> prodEmail = $input['email'];
               // $prod -> name = $input['name'];
               // $prod -> subscribe = $input['discription'];
               // $prod -> phone = $input['phone'];
               // $prod -> price = $input['price'];
                $prod -> image = $input['image'];
                $prod -> save();
                return view('home');
            }
            return 'Error... Log In';
        }

}
