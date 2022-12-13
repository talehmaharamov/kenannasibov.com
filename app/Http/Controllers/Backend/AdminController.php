<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Create\AdminRequest as CreateRequest;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
        $admins = User::whereHas("roles", function ($query) {
            $query->where("name", "admin");
        })->get();
        return view('backend.admins.index', get_defined_vars());
    }

    public function create()
    {
        return view('backend.admins.create');
    }

    public function delAdmin($id)
    {
        try {
            User::find($id)->delete();
            return redirect()->route('backend.admins.index')->with('successMessage', __('messages.delete-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.admins.index')->with('errorMessage', __('messages.error'));
        }
    }

    public function store(CreateRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole('admin');
            return redirect()->route('backend.admins.index')->with('successMessage', __('messages.add-success'));
        } catch (\Exception $e) {
            return redirect()->route('backend.admins.index')->with('errorMessage', __('messages.error'));
        }
    }
}
