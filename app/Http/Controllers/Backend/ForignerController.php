<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Forigner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use PHPMailer\PHPMailer\Exception;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class ForignerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('forigners index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $forigners = Forigner::all();
        return view('backend.forigners.index', get_defined_vars());
    }
    public function create()
    {
        abort_if(Gate::denies('forigners create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.forigners.create');
    }

    public function store(Request $request)
    {
        abort_if(Gate::denies('forigners create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            Forigner::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'location' => $request->location,
                'note'=> $request->note,
                'status' => 1
            ]);
            alert()->success(__('messages.success'));
            return redirect()->route('backend.forigners.index');
        } catch (Exception $e) {
            alert()->error(__('messages.error'));
        }
    }

    public function edit(Forigner $forigner)
    {
        abort_if(Gate::denies('forigners edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.forigners.edit', get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        abort_if(Gate::denies('forigners edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            Forigner::find($id)->update($request->all());
            alert()->success(__('messages.success'));
            return redirect()->route('backend.forigners.index');
        } catch (Exception $e) {
            alert()->error(__('messages.error'));
            return redirect()->route('backend.forigners.index');
        }
    }

    public function delForigner($id)
    {
        abort_if(Gate::denies('forigners delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            Forigner::find($id)->delete();
            alert()->success(__('messages.success'));
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->danger(__('messages.error'));
            return redirect()->back();
        }
    }
}
