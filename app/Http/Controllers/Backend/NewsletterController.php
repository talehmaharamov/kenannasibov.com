<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        try {
            Newsletter::create([
                'mail' => $request->newsletterEmail,
            ]);
            return redirect()->back()->with('successMessage', __('messages.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('successMessage', __('messages.error'));
        }
    }
}
