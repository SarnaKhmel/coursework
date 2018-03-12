<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;

class PostController extends Controller
{
    public function datatable()
    {
        return view('datatable');
    }
    public function getPosts(){
        $users = DB::table('demo_posts')->select('*');
        return DataTables::of($users)
                ->make(true);
    }
}
