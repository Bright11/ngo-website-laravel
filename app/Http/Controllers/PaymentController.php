<?php

namespace App\Http\Controllers;

use App\Models\Paymentchecker;
use App\Models\Successdonation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function sucessdonate($donatehelp,Request $req)
    {
       
      //  return $donatehelp;
        # code...
        $checksuccess=Paymentchecker::where('userip', request()->ip())->where('usercode',$donatehelp)->first();

    $str = "gftywbikamnvcsxzoplJGFcqsza";
    $str = str_shuffle($str);
    $str = substr($str, 5);
       try {
        if($checksuccess){
          $suceessdonate= new Successdonation;
          $suceessdonate->userip=request()->ip();
          $suceessdonate->invoice_code=$donatehelp;
          $suceessdonate->successdonate="Donation successful";
          $suceessdonate->save();
          if($suceessdonate){
            $checksuccess->usercode=$str;
            $checksuccess->update();
          }
        return view('frontend.thankyou');
        }else{
          return redirect('/');
        }
       } catch (\Throwable $th) {
        throw $th;
       
       }
      
    }

    // public function thankyou()
    // {
    //  # code...
    //  return view('frontend.thankyou');
    // }
}
