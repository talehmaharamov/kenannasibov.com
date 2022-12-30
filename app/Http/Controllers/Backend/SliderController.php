<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\HttpFoundation\Response;

class SliderController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('slider index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sliders = Slider::all();
        return view('backend.slider.index', get_defined_vars());
    }

    public function create()
    {
        abort_if(Gate::denies('slider create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.slider.create');
    }

    public function store(Request $request)
    {
        abort_if(Gate::denies('slider create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            Slider::create([
                'photo' => upload('sliders', $request->file('photo')),
                'alt' => $request->alt,
                'order' => 1,
                'status' => 1,
            ]);
            alert()->success(__('messages.success'));
            return redirect(route('backend.slider.index'));
        } catch (Exception $e) {
            alert()->error(__('messages.error'));
            return redirect(route('backend.slider.index'));
        }
    }

    public function update(Request $request, $id)
    {
        abort_if(Gate::denies('slider edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            if ($request->hasFile('photo')) {
                Slider::find($id)->update([
                    'photo' => upload('sliders', $request->file('photo'))
                ]);
            }
            Slider::find($id)->update([
                'alt' => $request->alt
            ]);
            alert()->success(__('messages.success'));
            return redirect(route('backend.slider.index'));
        } catch (Exception $e) {
            alert()->error(__('messages.error'));
            return redirect(route('backend.slider.index'));
        }
    }

    public function edit(Slider $slider)
    {
        abort_if(Gate::denies('slider edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.slider.edit', get_defined_vars());
    }

    public function delSlider($id)
    {
        abort_if(Gate::denies('slider delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            Slider::find($id)->delete();
            alert()->success(__('messages.success'));
            return redirect()->route('backend.slider.index');
        } catch (\Exception $e) {
            alert()->error(__('messages.error'));
            return redirect()->route('backend.slider.index');
        }
    }

    public function sliderStatus($id)
    {
        $status = Slider::where('id', $id)->value('status');
        if ($status == 1) {
            Slider::where('id', $id)->update(['status' => 0]);
        } else {
            Slider::where('id', $id)->update(['status' => 1]);
        }
        return redirect()->route('backend.slider.index');
    }
}
