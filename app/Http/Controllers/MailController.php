<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prod;
use DB;

class MailController extends Controller
{


    public function __construct(){

        $this->middleware('auth');

    }

    public function sendMessagesAdv(){

        return back();
    }
}
