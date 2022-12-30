<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\DirectorTranslation;
use App\Models\SiteLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DirectorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('directors index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $directors = Director::all();
        return view('backend.directors.index', get_defined_vars());
    }

    public function create()
    {
        abort_if(Gate::denies('directors create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.directors.create');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('directors edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $director = Director::find($id);
        return view('backend.directors.edit', get_defined_vars());
    }

    public function update(Request $request, Director $director)
    {
        abort_if(Gate::denies('directors edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            DB::transaction(function () use ($request, $director) {
                if ($request->hasFile('photo')) {
                    unlink($director->photo);
                    $director->photo = upload('directors', $request->file('photo'));
                }
                foreach (active_langs() as $lang) {
                    $director->translate($lang->code)->name = $request->name[$lang->code];
                    $director->translate($lang->code)->position = $request->position[$lang->code];
                }
                $director->save();
            });
            alert()->success(__('messages.success'));
            return redirect(route('backend.directors.index'));
        } catch (\Exception $e) {
            alert()->error(__('messages.error'));
            return redirect(route('backend.directors.index'));
        }
    }

    public function directorStatus($id)
    {
        abort_if(Gate::denies('directors edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
        abort_if(Gate::denies('directors delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            unlink(Director::find($id)->photo);
            Director::find($id)->delete();
            alert()->success(__('messages.success'));
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->error(__('messages.error'));
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        abort_if(Gate::denies('directors create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
                $trans->locale = $lc->code;
                $trans->director_id = $director->id;
                $trans->save();
            }
            alert()->success(__('messages.success'));
            return redirect()->route('backend.directors.index');
        } catch (\Exception $e) {
            alert()->error(__('messages.error'));
            return redirect()->route('backend.directors.index');
        }
    }
}
