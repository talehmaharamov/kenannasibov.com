<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Director;
use App\Models\Forigner;
use App\Models\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::find(1);
        $directors = Director::where('status', 1)->get();
        $forigners = Forigner::all();
        $countView = View::find(1)->increment('about_views');
        return view('frontend.about.index',get_defined_vars());
    }
}
