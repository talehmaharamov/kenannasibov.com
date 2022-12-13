<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MetaTag;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin|seo']);
    }

    public function index()
    {
        $metaTags = MetaTag::all();
        return view('backend.tags.index', get_defined_vars());
    }

    public function create()
    {
        return view('backend.tags.create');
    }

    public function delSeo($id)
    {
        try {
            MetaTag::find($id)->delete();
            return redirect()->back()->with('successMessage', __('messages.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('errorMessage', __('messages.error'));
        }
    }

    public function seoStatus($id)
    {
        $status = MetaTag::where('id', $id)->value('status');
        if ($status == 1) {
            MetaTag::where('id', $id)->update(['status' => 0]);
        } else {
            MetaTag::where('id', $id)->update(['status' => 1]);
        }
        return redirect()->route('backend.seo.index');
    }

    public function store(Request $request)
    {
        try {
            MetaTag::create([
                'attribute' => $request->attribute,
                'attribute_name' => $request->attribute_name,
                'content' => $request->content1,
                'status' => 1
            ]);
            return redirect()->back()->with('successMessage', __('messages.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('errorMessage', __('messages.error'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            MetaTag::find($id)->update([
                'attribute' => $request->attribute,
                'attribute_name' => $request->attribute_name,
                'content' => $request->content1,
            ]);
            return redirect()->back()->with('successMessage', __('messages.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('errorMessage', __('messages.error'));
        }
    }
}
