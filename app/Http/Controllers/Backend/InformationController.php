<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Update\InformationRequest;
use App\Http\Requests\Update\InformationPasswordRequest as PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class InformationController extends Controller
{
    public function index()
    {
        return view('backend.informations.index', get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        try {
            User::find($id)->update([
                'name' => $request->name,
            ]);
            return redirect()->back()->with('successMessage', __('messages.success'));

        } catch (\Exception $e) {
            return redirect()->back()->with('successPassword', __('messages.error'));
        }
    }

    public function store(PasswordRequest $request)
    {
        try {
            User::find($request->id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('successPassword', __('messages.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('successPassword', __('messages.error'));
        }

    }
}
