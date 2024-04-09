<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Payment;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index(){
        return view("index");
    }

    public function contact(){
        return view("contact");
    }

    public function about(){
        return view("about");
    }
    
 

    public function make_payment(Request $request)
    {
        return response()->json(['payload' => $request->all()]);
    }

    public function store_payment(Request $request){


        // $payment = new Payment();

        // $payment->fname = $request->fname;
        // $payment->lname = $request->lname;
        // $payment->email = $request->email;
        // $payment->phone = $request->phone;
        // $payment->password = bcrypt($request->password);

        // $payment->save();

        // return response()->json("payment Created", 200);
        return response()->json(['request' => $request->payload]);
    }
}
