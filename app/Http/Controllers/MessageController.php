<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

class MessageController extends Controller
{
    //
    public function sendmessage(Request $req)
    {
        //send email
        //
        $maildata=[
            'websiteownner'=>'brightevuka2017@gmail.com',
            'recipient'=>'brightevuka2017@gmail.com',
            'from_writer_Email'=>$req->email,
            'from_writer_name'=>$req->name,
            'from_writer_inquiry'=>$req->inquiry,
            'body'=>$req->message
        ];
       
      try {
        $checksend= Mail::send('contactusemailtemplate',$maildata, function ($sendmessage) use ($maildata){
            $sendmessage->from($maildata['websiteownner'],'Bright C Web');
            $sendmessage->sender($maildata['from_writer_Email']);
            $sendmessage->to($maildata['recipient']);
            $sendmessage->replyTo($maildata['from_writer_Email']);

            $sendmessage->subject($maildata['from_writer_inquiry']);

        });
      } catch (\Throwable $th) {
        throw $th;
      }
        if($checksend){
            return redirect()->back()->with('status','Your email has been sent, we will get back to you as soon as possible,Thank you');
        }else{
            return redirect()->back();
        }
        

    //     //the end
    //    $message=new Message;
    //    $message->name=$req->name;
    //    $message->email=$req->email;
    //    $message->inquiry=$req->inquiry;
    //    $message->message=$req->message;
    //    return $message;
    //    $message->save();
    //    return redirect()->back()->with('status','Ac');
    }
}
