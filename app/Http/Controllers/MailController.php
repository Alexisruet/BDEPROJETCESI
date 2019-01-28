<?php

namespace App\Http\Controllers;
//use Mail;
use Auth;
use DB;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send()
    {
        $user = Auth::user()->id;
       // $destinataire = DB::select('select email from users where id = 1');
        //dd($destinataire[0]);
        \Mail::send(['text'=>'page/mail'],['name','Sarthak'],function($message){
$message->to('projetwebcesibdx@gmail.com','To Biftumes')->subject('Test email');
$message->from('projetwebcesibdx@gmail.com','Biftumes');
        });
    }
}
