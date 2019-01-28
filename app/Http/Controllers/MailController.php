<?php

namespace App\Http\Controllers;
//use Mail;
use Auth;
use DB;
use Redirect;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send()
    {
       // $user = Auth::user()->id;
       // $destinataire = DB::select('select email from users where id = 1');
        //dd($destinataire[0]);
        \Mail::send(['text'=>'page/mail'],['name','BDECESI'],function($message){
$message->to('projetwebcesibdx@gmail.com','To BDECESI')->subject('Notifications achat');
$message->from('projetwebcesibdx@gmail.com','BDECESI');
        });
        return Redirect::to('https://www.paypal.me/jokerSanch?fbclid=IwAR1cj16pVM7Y6rCj7MhCi69yA9DiY_yELs3vGxp5k0oQdDSqk_yjRIWGYKk');
    }
}

