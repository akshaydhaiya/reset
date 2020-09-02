<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use app\Contact;

class ContactController extends Controller
{
    public function submit(request $req) 
    {
      //  return $req;
        // $table= new Contactus;

        // $table->name=$req->input('name');
        // $table->phone_number=$req->input('phone_number');
        // $table->email=$req->input('email');
        // $table->message=$req->input('message');

        // $table->save();

        $affected = DB::table('Contact')
        ->where('Id',  $NewId=$req->input('Id'))
                      ->update(['name' =>$req ->  input('name'),
                      'phone_number'   =>$req ->  input('phone_number'),                      
                      'email'          =>$req ->  input('email'),
                      'message'        =>$req ->  input('message')
                      
                      ]);              

    }
}
