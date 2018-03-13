<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Faker\Provider\Image;
use function GuzzleHttp\Promise\all;
use App\Prod;
use DB;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $Category;

    public function __construct(){
       // $this->middleware('auth');
        $this->Category = new Category ();

    }

    public function showAdminCategoty(){
        if(Auth::check() && Auth::user()->moderator){
        $dataAllCtg = Category::all()->toArray();
        return view('Shop.AdminStore.AdminCategory', ['dataAllCtg' => $dataAllCtg]);
    }
    }

    public function createNewCategory( Request $request ){

        $input = $request->only([
            'name',
            'subscribe',
        ]);
        //dd($request->all());


        // dd($request->all());
        $ctg = new Category();
        $ctg->category = $input['name'];
        $ctg->subscribe = $input['subscribe'];
        $ctg->save() ;

        return back();
    }
    public function deleteCategory(Request $request){

        $id = $request->id;
        $ctg = Category::find($id);
        if($ctg != null) {
            $ctg->delete();
            return back();
        }
        return response('Error! ...');
    }

    public function filterCategory(Request $request){
        $id = $request-> id;

        $product = Prod::where('id_category',$id)->get();
        //dd($product);
        return view('Shop.AdminStore.filter', ['$product', $product]);

    }
}
