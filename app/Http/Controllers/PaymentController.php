<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{
    
    public function payment(){
        $countries = Country::all();
        return view("get-access",compact("countries"));
    }

public function paymentSuccess($ref){

    $payment = Payment::where("reference",$ref)->first();

    if ($payment) {
        return view("payment-success",compact("payment"));
    }else{
        return redirect()->route("payment")->with('error','Invalid registration, kindly make payment.');
    }

}

    public function paymentAccess(Request $request){
        return response(["data"=>$request->all()]);
    }

    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        
        dd($paymentDetails["data"]["reference"]);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
