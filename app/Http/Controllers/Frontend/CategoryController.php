<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Paylasim;
use App\Models\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $allPosts = Paylasim::where('status', '=', 1)
            ->where('category_id', '=', Category::where('slug', '=', $slug)->value('id'))
            ->where('admin_status', '=', 1)
            ->get();
        $countView = View::find(1)->increment('categories_views');
        return view('frontend.posts.all', get_defined_vars());
    }
}
