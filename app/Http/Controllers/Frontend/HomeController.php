<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\NewsletterController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Director;
use App\Models\Newsletter;
use App\Models\Paylasim;
use App\Models\PaylasimTranslation;
use App\Models\Slider;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use PHPMailer\PHPMailer\Exception;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;

class HomeController extends Controller
{
    public function index()
    {
        $firstNews = Paylasim::where('status', '=', 1)
            ->where('category_id', '=', Category::where('slug', 'news')->value('id'))
            ->where('admin_status', '=', 1)
            ->first();
        $thereNews = Paylasim::where('status', '=', 1)
            ->where('category_id', Category::where('slug', 'news')->value('id'))
            ->where('admin_status', '=', 1)
            ->skip(1)->take(4)->get();
        $cats = Category::where('status', 1)->where('slug', '!=', 'news')->get();
        $fourNews = [];
        $exceptCats = [];
        foreach ($cats as $cat) {
            if (
                Paylasim::where('category_id', '=', $cat->id)
                ->where('status', '=', 1)
                ->where('admin_status', '=', 1)
                ->count() > 3
            ) {
                $nws = Paylasim::where('category_id', $cat->id)
                    ->take(4)
                    ->orderBy('id', 'DESC')
                    ->get();
                array_push($fourNews, $nws);
                array_push($exceptCats, $cat->id);
            }
        }
        $countView = View::find(1)->increment('home_views');
        $sliders = Slider::where('status', 1)->get();
        return view('frontend.index', get_defined_vars());
    }

    public function search(Request $request)
    {
        $searchPosts = PaylasimTranslation::where('title', 'LIKE', '%' . $request->s . '%')
            ->orWhere('content', 'LIKE', '%' . $request->s . '%')
            ->orWhere('description', 'LIKE', '%' . $request->s . '%')
            ->orWhere('keywords', 'LIKE', '%' . $request->s . '%')
            ->pluck('paylasim_id');
        $searchResult = [];
        foreach ($searchPosts as $key => $sp) {
            $postS = Paylasim::where('id', '=', convert_number($sp))
                ->where('status', '=', 1)
                ->where('admin_status', '=', 1)
                ->first();
            $searchResult[] = $postS;
        }
        $searchIndex = $request->s;
        $searchResult = array_unique($searchResult);
        return view('frontend.posts.search', get_defined_vars());
    }

    public function newsletter(Request $request)
    {
        try {
            Newsletter::create([
                'mail' => $request->newsletterEmail,
            ]);
            return redirect()->back()->with('successMessage', __('messages.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('errorMessage', __('messages.error'));
        }
    }
}
