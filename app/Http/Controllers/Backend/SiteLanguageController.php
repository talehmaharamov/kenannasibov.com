<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Create\SiteLanguageRequest;
use App\Http\Requests\Backend\Update\SiteLanguageRequest as updateRequest;

use App\Models\SiteLanguage;

class SiteLanguageController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
        $siteLanguages = SiteLanguage::all();
        return view('backend.site-languages.index', get_defined_vars());
    }

    public function create()
    {
        return view('backend.site-languages.create');
    }

    public function edit($id)
    {
        $language = SiteLanguage::find($id);
        return view('backend.site-languages.edit', get_defined_vars());
    }

    public function store(SiteLanguageRequest $request)
    {
        try {
            $icon = upload('icons', $request->file('icon'));
            $siteLanguage = new SiteLanguage();
            $siteLanguage->name = $request->name;
            $siteLanguage->code = $request->code;
            $siteLanguage->icon = $icon;
            $siteLanguage->status = 1;
            $siteLanguage->save();
            return redirect()->route('backend.site-languages.index')->with('successMessage', __('messages.add-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.site-languages.index')->with('errorMessage', __('messages.error'));
        }
    }

    public function update(updateRequest $request, $id)
    {
        try {
            if ($request->hasFile('icon')) {
                unlink(SiteLanguage::find($id)->icon);
                $icon = upload('icons', $request->file('icon'));
            }
            SiteLanguage::find($id)->update([
                'name' => $request->name,
                'code' => $request->code,
                'icon' => ($request->hasFile('icon') ? $icon : SiteLanguage::find($id)->icon),
            ]);
            return redirect()->route('backend.site-languages.index')->with('successMessage', __('messages.add-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.site-languages.index')->with('errorMessage', __('messages.error'));
        }
    }

    public function siteLanStatus($id)
    {
        $status = SiteLanguage::where('id', $id)->value('status');
        if ($status == 1) {
            SiteLanguage::where('id', $id)->update(['status' => 0]);
        } else {
            SiteLanguage::where('id', $id)->update(['status' => 1]);
        }
        return redirect()->route('backend.site-languages.index');
    }

    public function delSiteLang($id)
    {
        try {
            unlink(SiteLanguage::find($id)->icon);
            SiteLanguage::find($id)->delete();
            return redirect()->route('backend.site-languages.index')->with('successMessage', __('messages.add-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.site-languages.index')->with('errorMessage', __('messages.error'));
        }
    }
}
