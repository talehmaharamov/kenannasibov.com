<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\DirectorTranslation;
use App\Models\SiteLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
        $directors = Director::all();
        return view('backend.directors.index', get_defined_vars());
    }

    public function create()
    {
        return view('backend.directors.create');
    }

    public function edit($id)
    {
        $director = Director::find($id);
        return view('backend.directors.edit', get_defined_vars());
    }

    public function update(Request $request, Director $director)
    {
        try {
            DB::transaction(function () use ($request, $director) {
                if ($request->hasFile('photo')) {
                    unlink($director->photo);
                    $director->photo = upload('directors', $request->file('photo'));
                }
                foreach (active_langs() as $lang) {
                    $director->translate($lang->code)->name = $request->name[$lang->code];
                    $director->translate($lang->code)->position = $request->position[$lang->code];
                    $director->translate($lang->code)->description = $request->description[$lang->code];
                }
                $director->save();
            });
            return redirect(route('backend.directors.index'))->with('successMessage', __('messages.success'));
        } catch (\Exception $e) {
            return redirect(route('backend.directors.index'))->with('errorMessage', __('messages.error'));
        }
    }

    public function directorStatus($id)
    {
        $status = Director::where('id', $id)->value('status');
        if ($status == 1) {
            Director::where('id', $id)->update(['status' => 0]);
        } else {
            Director::where('id', $id)->update(['status' => 1]);
        }
        return redirect()->route('backend.directors.index');
    }

    public function delDirector($id)
    {
        try {
            unlink(Director::find($id)->photo);
            Director::find($id)->delete();
            return redirect()->back()->with('successMessage', __('messages.delete-success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('errorMessage', __('messages.error'));
        }
    }

    public function store(Request $request)
    {
        try {
            $langCodes = SiteLanguage::where('status', 1)->get();
            $director = new Director();
            $director->photo = upload('directors', $request->file('photo'));
            $director->status = 1;
            $director->save();
            foreach ($langCodes as $lc) {
                $trans = new DirectorTranslation();
                $trans->name = $request->name[$lc->code];
                $trans->position = $request->position[$lc->code];
                $trans->description = $request->description[$lc->code];
                $trans->locale = $lc->code;
                $trans->director_id = $director->id;
                $trans->save();
            }
            return redirect()->route('backend.directors.index')->with('successMessage', __('messages.add-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.directors.index')->with('errorMessage', __('messages.error'));
        }
    }
}
