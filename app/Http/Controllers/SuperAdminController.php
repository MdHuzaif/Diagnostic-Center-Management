<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use  Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class SuperAdminController extends Controller
{
    
  

   public function index()
   {
       $this->AdminAuthCheck();
      return view('index');
   }


    public function logout()
   {

     $id=Session::get('id'); 
     if ($id) {
       Session::flush(); //username ar password null hoye gelo
      return Redirect::to('/');

     }
     else
     {

      Session::flush(); //username ar password null hoye gelo
      return Redirect::to('/reception');
     }
      
   }

   
    public function AdminAuthCheck()
   {
     $id=Session::get('id'); //admin id session theke niche...jodi thake taile id thakbe variable a ar noile null thakbe variable a.
     $reception_id=Session::get('reception_id');
     if($id)
     {

      return;
     }
     else if($reception_id)
     {

      return;
     }
     else
     {

      return Redirect::to('/')->send();
     }


   }
}