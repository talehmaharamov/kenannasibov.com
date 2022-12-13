<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\SiteLanguage;
use App\Http\Requests\Backend\Create\CategoryRequest as CreateRequest;
use App\Http\Requests\Backend\Update\CategoryRequest as UpdateRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index', get_defined_vars());
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function categoryStatus($id)
    {

        $status = Category::where('id', $id)->value('status');
        if ($status == 1) {
            Category::where('id', $id)->update(['status' => 0]);
        } else {
            Category::where('id', $id)->update(['status' => 1]);
        }
        return redirect()->route('backend.categories.index');
    }

    public function update(UpdateRequest $request, Category $category)
    {
        try {
            DB::transaction(function () use ($request, $category) {
                $category->slug = $request->slug;

                foreach (active_langs() as $lang) {
                    $category->translate($lang->code)->name = $request->name[$lang->code];
                }
                $category->save();
            });
            return redirect(route('backend.categories.index'))->with('successMessage', __('messages.success'));
        } catch (\Exception $e) {
            return redirect(route('backend.categories.index'))->with('errorMessage', __('messages.error'));
        }

    }

    public function store(CreateRequest $request)
    {
        try {
            $category = new Category();
            $category->slug = $request->slug;
            $category->status = 1;
            $category->save();
            foreach (active_langs() as $lc) {
                $trans = new CategoryTranslation();
                $trans->name = $request->name[$lc->code];
                $trans->locale = $lc->code;
                $trans->category_id = $category->id;
                $trans->save();
            }
            return redirect()->route('backend.categories.index')->with('successMessage', __('messages.add-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.categories.index')->with('errorMessage', __('messages.error'));
        }
    }

    public function delCategory($id)
    {
        try {
            Category::find($id)->delete();
            return redirect()->route('backend.categories.index')->with('successMessage', __('messages.add-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.categories.index')->with('errorMessage', __('messages.error'));
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.categories.edit', get_defined_vars());
    }
}
