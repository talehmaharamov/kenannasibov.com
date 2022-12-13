<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Paylasim;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id)
    {
        $post = Paylasim::find($id);
        $releatedPosts = Paylasim::where('category_id', $post->category_id)->limit(8)->get();
        $post->increment('view_count');
        return view('frontend.posts.index', get_defined_vars());
    }

    public function allPosts()
    {
        $allPosts = Paylasim::where('status', 1)->get();
        return view('frontend.posts.all', get_defined_vars());
    }
}
