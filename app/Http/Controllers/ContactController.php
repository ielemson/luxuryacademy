<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Captcha;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
    
    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required',
            'email' => 'required|email|max:255',
            'message_body' => 'required|string',
            'captcha' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Send the email
        $data = $request->all();
        Mail::to('ielemson@gmail.com')->send(new ContactFormMail($data));

        return response()->json(['message' => 'Your message has been sent successfully!']);
    }
}

