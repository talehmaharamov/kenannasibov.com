<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
        $about = About::first();
        return view('backend.about.index', get_defined_vars());
    }

    public function update(Request $request, About $about)
    {
        try {
            DB::transaction(function () use ($request, $about) {
                if ($request->hasFile('photo')) {
                    if ($about->photo != 'firstPhoto') {
                        unlink($about->photo);
                    }
                    $about->photo = upload('about', $request->file('photo'));
                }
                foreach (active_langs() as $lang) {
                    $about->translate($lang->code)->title = $request->title[$lang->code];
                    $about->translate($lang->code)->description = $request->description[$lang->code];
                }
                $about->save();
            });
            return redirect(route('backend.about.index'))->with('successMessage', __('messages.success'));
        } catch (\Exception $e) {
            return redirect(route('backend.about.index'))->with('errorMessage', __('messages.error'));
        }
    }


}
