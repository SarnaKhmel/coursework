<?php

namespace App\Http\Controllers;


//use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\User;
//use Illuminate\Support\Facades\Auth;
use DB;
use App\Prod;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Redirect;
//use Illuminate\Validation\Rules\In;


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
            return view('Shop.UserStore.UserInfo',['data'=>$data]);
        }
            return view('auth.login');
        }


        public function showCreate()
        {
        if(Auth::check()){
            return view('Shop.UserStore.Create');
        }   return view('auth.login');
        }

        public function createNewUserProduct(Request $request){

            //dd(Auth::user()->email);
            //dd($request->only()->input['email']);
            if(Auth::check()){

                $input=$request->only([
                    'name',
                    'email',
                    'phone',
                    'price',
                    'subscribe',
                    'images'

                ]);
                // return response($request->all());

                $prod = new Prod();
                $prod->user_email = Auth::user()->email;
                $prod->user_id = Auth::user()->id;
                $prod->prodEmail = $input['email'];
                $prod->name = $input['name'];
                $prod->subscribe = $input['subscribe'];
                $prod->phone = $input['phone'];
                $prod->price = $input['price'];
                $prod->image = $input['images'];
                $prod->save();

                return back();
            }
            return view('auth.login');
        }


            public function showAllInfo()
            {
                $dataAllProd = Prod::all()->toArray();
                return view('home', ['dataAllProd'=> $dataAllProd]);
            }

            public function showUserAdv(){

               if(Auth::check()){
                   $user_id = Auth::id();
                   $AllUserAdv =Prod::where('user_id', $user_id)
                       ->get()->toArray();
                   return view('Shop.UserStore.userAdv',['AllUserAdv'=> $AllUserAdv]);
               }
               return view('auth.login');

            }
            public  function removeUserAdv( Request $request){
                   if(Auth::check()){
                        $id = $request->id;
                        $prod = Prod::Find($id);
                        if($prod != null) {
                            $prod->delete();
                            return back();
                        }
                        return response('Error! ');
                    }
                    return view('auth.login');

            }

            public function editUserAdv(Request $request){
                if(Auth::check()){
                    $id = $request->id;
                   $dataEdit = Prod::where('id', $id)->get()->toArray();
                   return view('Shop.UserStore.edit',['dataEdit'=>$dataEdit]);
                }
            }
            public function updateUserAdv( Request $request)
            {

            }
}
