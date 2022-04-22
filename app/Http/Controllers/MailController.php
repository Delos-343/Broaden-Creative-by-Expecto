<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\SendEmailGenb;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function kirim_email(array $data)
    {
        
        Mail::to("taufikmasrizal1@gmail.com")->send(new SendEmailGenb());

        echo"Success Send Email ";
    }
}
