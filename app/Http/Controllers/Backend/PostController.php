<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Paylasim;
use App\Models\PaylasimTranslation;
use App\Models\SiteLanguage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('backend.posts.index');
    }

    public function create()
    {
        return view('backend.posts.create');
    }

    public function store(Request $request)
    {
        $langCodes = SiteLanguage::where('status', 1)->get();
        $paylasim = new Paylasim();
        if ($request->hasFile('photo')) {
            $paylasim->photo = upload('posts/' . $paylasim->id, $request->file('photo'));
        }
        $paylasim->category_id = $request->category;
        $paylasim->user_id = auth()->user()->id;
        $paylasim->status = 1;
        $paylasim->view_count = 0;
        $paylasim->save();
        foreach ($langCodes as $lc) {
            $trans = new PaylasimTranslation();
            $trans->title = $request->title[$lc->code];
            $trans->content = $request->content1[$lc->code];
            $trans->locale = $lc->code;
            $trans->paylasim_id = $paylasim->id;
            $trans->save();
        }
    }
}
