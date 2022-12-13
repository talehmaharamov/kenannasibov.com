<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Director;
use App\Models\Paylasim;
use http\Env;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $counts = [
            'contactUs' => Contact::count(),
            'news' => 0,
            'posts' => Paylasim::count(),
            'directors' => Director::count(),
        ];
        return view('backend.dashboard', get_defined_vars());
    }
}
