<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelLocalization;
use Redirect;

class SiteSettingsController extends Controller
{
        public function changeLang($lang)
        {
            LaravelLocalization::setLocale($lang);
            return Redirect::to(LaravelLocalization::getLocalizedURL($lang, \URL::previous()));
        }
}
