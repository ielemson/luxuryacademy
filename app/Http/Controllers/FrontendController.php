<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Payment;
use Illuminate\Http\Request;

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
}
