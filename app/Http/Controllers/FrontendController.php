<?php

namespace App\Http\Controllers;

use App\Mail\PaymentNotification;
use App\Models\Country;
use App\Models\Payment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laravel\Ui\Presets\React;

class FrontendController extends Controller
{
    //

    public function index(){
        return view("welcome");
    }

    public function about(){
        return view("about");
    }
    

    // public function make_payment(Request $request)
    // {
    //     return response()->json(['payload' => $request->all()]);
    // }

    public function paymentAccess(Request $request){
        $setting = Setting::find(1);

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
            $details = [
                'training_title' => $setting->training_title,
                'telegram_group' => $setting->telegram_group,
                'fname' => $payment->fname,
                'lname' => $payment->lname,
            ];
            
            // $userEmail = $request->email;
        Mail::to($payment->email)->send(new PaymentNotification($details));

        return response()->json(["msg"=>"Access granted!, please check your email for more information","status"=>200,'payment_ref'=>$payment->reference]);
        }
        return response()->json(["msg"=>"Error Occured, try again","status"=>500]);
    }

   
}
