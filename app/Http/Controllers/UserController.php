<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use DB;
use App\Prod;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $user;
    protected $Prod;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showUser()
    {       $id = Auth::id();
            $data = User::where('id', $id)->get()->toArray();
            return view('Shop.UserStore.UserInfo', ['data' => $data]);
    }
    public function updateUserInfo( Request $request)
    {
        $input = $request->only(
            'id',
            'name',
            'email',
            'phone'
        );

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone_number = $input['phone'];
        $user->save();
        return redirect()->route('home');
    }



}