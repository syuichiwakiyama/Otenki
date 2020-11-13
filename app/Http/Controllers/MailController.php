<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    

    public function send(){
        // Mail::send(['text' =>'mail'] ,['name'=>'飲み会通知サービス'] , function($message){
        //     $message->to('syuichi19990714@gmail.com' ,'to syuichi')->subject('text');
        //     $message->from('syuichi19990714@gmail.com' ,'syuichi');
        // });

        Mail::send(new  SendMail ());
    }
}
