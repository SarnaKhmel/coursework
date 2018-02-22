<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
namespace App\Http\Controllers;

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
//---------

    public function imageUpload()

    {

        return view('test');

    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost()

    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $imageName);



        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);

    }


}
