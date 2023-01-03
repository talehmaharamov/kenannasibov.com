<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Newsletter;
use App\Models\Paylasim;
use App\Models\PaylasimTranslation;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get();
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
            $validator = Validator::make($request->all(), [
                'newsletterEmail' => 'unique:newsletter|required|max:255',
            ]);
            $subscriber =  Newsletter::create([
                'mail' => $request->newsletterEmail,
                'token' => md5(time()),
                'status' => 0,
            ]);
            $data = [
                'id' => $subscriber->id,
                'mail' => $subscriber->mail,
                'token' => $subscriber->token,
            ];
            Mail::send('backend.mail.newsletter', $data, function ($message) use ($subscriber) {
                $message->to($subscriber->mail);
                $message->subject('Email adresinizi təsdiq edin!');
            });
            return redirect()->back()->with('successMessage', __('messages.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('errorMessage', __('messages.error'));
        }
    }

    public function verifyMail($id, $token)
    {
        $subscriber = Newsletter::find($id);
        if($subscriber->token == $token){
            $subscriber->update([
                'status' => 1,
            ]);
            return view('frontend.includes.mail');
        }
    }
}
