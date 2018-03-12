<?php

namespace App\Http\Controllers;
use App\User;
use Faker\Provider\Image;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Prod;
use App\Category;
use DB;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $user;
    protected $Prod;
    protected $Category;

    public function __construct(){

        $this->middleware('auth');
        $this->Prod = new Prod();
        $this->Category = new Category();
    }

    public function showCreate()
    {
      //  dd(Auth::user()->phone);
        $dataCategory = Category::all()->toArray();
       return view('Shop.AdvStore.Create', ['dataCategory' => $dataCategory]);
    }

    public function createNewUserProduct(Request $request)
    {
        //dd($request->all());
            $input = $request->only([
                'name',
                'price',
                'subscribe',
                'category',
            ]);
           //dd($request->images);


        $files = $request->file('images');
        $names = [];

        // dd($request->all());
        if (!empty($files)){
            foreach ($files as $file){
                $name =time().'.'. $file->getClientOriginalName();
                $file->move(public_path('pictures'), $name);
                $names[$file->getClientOriginalName()] = $name;
                                     }
        }

            $prod = new Prod();
            $prod->id_category = $input['category'];
            $prod->user_email = Auth::user()->email;
            $prod->user_id = Auth::user()->id;
            $prod->prodEmail = Auth::user()->email;
            $prod->name = $input['name'];
            $prod->subscribe = $input['subscribe'];
            $prod->phone = Auth::user()->phone;
            $prod->price = $input['price'];
            $prod->images = json_encode($names);
            $prod->avdImages = json_encode("123");
            $prod->save() ;
            //dd($prod);
            return back();
            }

    public function showAllInfo()
    {
        $dataAllProd = Prod::all()->toArray();
        $dataAllCategory = Category::all()->toArray();
        return view('home', ['dataAllProd' => $dataAllProd, 'dataAllCategory' => $dataAllCategory]);
    }



//    public function showAdv(Request $request){
//        $id = $request->id;
//        $dataAdv = Prod::where('id', $id)->get()->toArray();
//        return view('Shop.AdvStore.AdvPage', ['dataAdv' => $dataAdv]);
//    }

    public function showUserAdv(){
            $user_id = Auth::id();
            $AllUserAdv =Prod::where('user_id', $user_id)
                ->get()->toArray();
            return view('Shop.AdvStore.userAdv',['AllUserAdv'=> $AllUserAdv]);
     }

    public  function removeUserAdv( Request $request){
            $id = $request->id;
            $prod = Prod::find($id);
            if($prod != null) {
                $prod->delete();
                return back();
            }
            return response('Error! ');
    }

    public function editUserAdv(Request $request)
    {
        $id = $request->id;
        $dataEdit = Prod::where('id', $id)->get()->toArray();
        //dd($dataEdit);
        //переписати в колекцію (забрати toArray() і відредагувати в блейді)
        return view('Shop.AdvStore.edit', ['dataEdit' => $dataEdit]);
    }
    public function reviseAvd(Request $request){

        $id = $request->id;
        //dd($id);
        //dd($request->all());
        $dataUser = User::where('id', $id)->get()->toArray();
        $dataAdv = Prod::where('id', $id)->get()->toArray();
       // dd($dataAdv);
        return view('Shop.AdvStore.AdvPage', ['dataAdv' => $dataAdv, 'dataUser' => $dataUser]);

    }

    public function updateUserAdv( Request $request)
    {

        $input = $request->only(
            'id',
            'name',
            'email',
            'phone',
            'price',
            'subscribe',
            'images'
        );
        $prod = Prod::find($input['id']);
        $prod->user_email = Auth::user()->email;
        $prod->user_id = Auth::user()->id;
        $prod->prodEmail = $input['email'];
        $prod->name = $input['name'];
        $prod->subscribe = $input['subscribe'];
        $prod->phone = $input['phone'];
        $prod->price = $input['price'];
        $prod->image = $input['images'];
        $prod->save();
        return redirect()->route('userAdv');

    }


}
