<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contact-us.index', get_defined_vars());
    }

    public function sendMessage(Request $request)
    {
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->save();
            return redirect()->back()->with('successMessage', __('messages.send-success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('errorMessage', __('messages.error'));
        }
    }

    public function delContactUS($id)
    {
        try {
            Contact::find($id)->delete();
            return redirect()->back()->with('successMessage', __('messages.delete-success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('errorMessage', __('messages.error'));
        }

    }
}
