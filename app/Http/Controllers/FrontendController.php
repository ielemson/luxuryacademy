<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Payment;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class FrontendController extends Controller
{
    //

    public function index(){
        return view("welcome");
    }

    public function contact(){
        return view("contact");
    }

    public function about(){
        return view("about");
    }
    
 

    // public function make_payment(Request $request)
    // {
    //     return response()->json(['payload' => $request->all()]);
    // }

    public function paymentAccess(Request $request){


        $payment = new Payment();

        $payment->fname = $request->fname;
        $payment->lname = $request->lname;
        $payment->email = $request->email;
        $payment->phone = $request->phone;
        $payment->amount = $request->amount;
        $payment->country = $request->country;
        $payment->state = $request->state;
        $payment->message = $request->message;
        $payment->reference = $request->reference;
        $payment->status = $request->status;
        $payment->username = $request->username;

        if ($payment->save()) {
            return response()->json(["msg"=>"Access granted!, please check your email for more information","status"=>200]);
        }
        return response()->json(["msg"=>"Error Occured, try again","status"=>500]);
    }

    public function Sendcontact(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ],[
            'g-recaptcha-respons.required'=>"Recaptcha is required"
        ]);
        
        // $user =  User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'password' => $request->password,
        // ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        dd($details);

        // ContactUs::create($details);
        // return back()->with('success','Great! We have received your message');
         // $userEmail = $request->email;
        //  Mail::to("obinnalevi43@gmail.com")->send(new ContactMessage($details));
 
        //  if (Mail::failures()) {
        //      //  return response()->Fail('Sorry! Please try again latter');
        //      return back()->with('error','Sorry! Please try again latter');
        //  }else{
        //      //  return response()->success('Great! Successfully send in your mail');
        //      return back()->with('success','Great! We have received your message');
        //     }
    }
}
