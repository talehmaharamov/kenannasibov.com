<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SiteLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LController extends Controller
{
    public function switchLang($lang)
    {
        dd(Session::get('blang'));
//        if (array_key_exists($lang, Config::get('languages'))) {
//            Session::put('applocale', $lang);
//        }
        app()->setLocale($lang);
        session()->put('blang', $lang);
        return redirect()->back();
    }

    public function frontLanguage($dil)
    {
        app()->setLocale($dil);
        session()->put('dil', $dil);
        return redirect()->back();
    }
}
