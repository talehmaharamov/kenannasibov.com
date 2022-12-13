<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Create\SettingRequest as CreateRequest;
use App\Http\Requests\Backend\Update\SettingRequest;
use App\Models\Setting;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
        $settings = Setting::all();
        return view('backend.settings.index', get_defined_vars());
    }

    public function edit($id)
    {
        $currentSetting = Setting::find($id);
        return view('backend.settings.edit', get_defined_vars());
    }

    public function create()
    {
        return view('backend.settings.create');
    }

    public function store(CreateRequest $request)
    {
        try {
            $setting = new Setting();
            $setting->name = $request->name;
            $setting->link = $request->link;
            $setting->status = 1;
            $setting->save();
            return redirect(route('backend.settings.index'))->with('successMessage', __('messages.add-success'));
        } catch (\Exception $e) {
            return redirect(route('backend.settings.index'))->with('errorMessage', __('messages.error'));
        }
    }

    public function delSetting($id)
    {
        try {
            Setting::find($id)->delete();
            return redirect(route('backend.settings.index'))->with('successMessage', __('messages.delete-success'));
        } catch (\Exception $e) {
            return redirect(route('backend.settings.index'))->with('errorMessage', __('messages.error'));
        }
    }

    public function settingStatus($id)
    {
        $status = Setting::where('id', $id)->value('status');
        if ($status == 1) {
            Setting::where('id', $id)->update(['status' => 0]);
        } else {
            Setting::where('id', $id)->update(['status' => 1]);
        }
        return redirect()->route('backend.settings.index');
    }

    public function update(SettingRequest $request, $id)
    {
        try {
            Setting::find($id)->update([
                'name' => $request->name,
                'link' => $request->link,
            ]);
            return redirect(route('backend.settings.index'))->with('successMessage', __('messages.success'));
        } catch (\Exception $e) {
            return redirect(route('backend.settings.index'))->with('errorMessage', __('messages.error'));
        }
    }
}
