<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Create\AdminRequest as CreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WriterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
        $writers = User::whereHas('roles', function ($query) {
            $query->where('name', 'writer');
        })->get();
        return view('backend.writers.index', get_defined_vars());
    }

    public function create()
    {
        return view('backend.writers.create');
    }

    public function store(CreateRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole('writer');
            return redirect()->route('backend.writers.index')->with('successMessage', __('messages.add-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.writers.index')->with('errorMessage', __('messages.error'));
        }
    }

    public function delWriter($id)
    {
        try {
            User::find($id)->delete();
            return redirect()->route('backend.writers.index')->with('successMessage', __('messages.delete-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.writers.index')->with('errorMessage', __('messages.error'));
        }
    }
}
