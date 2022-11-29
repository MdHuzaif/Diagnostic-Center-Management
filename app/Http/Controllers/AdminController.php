<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;  //ager line a request dewa ase tai ai line a requests dewa hoese...duita ak nam hole problem kore(request,requests)
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    

    public function index()

    {


    	return view('login');
    }

    

    public function dashboard(Request $request)

    {
       $admin_email=$request->admin_email;
       $admin_password=md5($request->admin_password);
       $result=DB::table('admin_tbl')
             ->where('admin_email',$admin_email)
             ->where('admin_password',$admin_password)
             ->first();

            // echo"<pre>";
            // print_r($result);
            // exit();

         if($result)

         {

         	Session::put('admin_email',$result->admin_email);
         	Session::put('id',$result->id);
            Session::put('admin_password',$result->admin_password);
         	return Redirect::to('/dashboard');
         }

         else
         {

         	Session::put('message','Username or Password Invalid');
         	return Redirect::to('/');
         }

    }


    //change admin

     public function change_admin()

    {
             $this->ChangeAdminAuthCheck();

            return view('change_admin');
    }
       

      public function save_change_admin(Request $request)
      { 
        $id=Session::get('id');

        $data=array();
        $data['admin_email']=$request->admin_email;
        $data['admin_password']=md5($request->admin_password);
                
         DB::table('admin_tbl')
               ->where('id',$id)
               ->update($data);
          Session::put('change_message','Admin Profile Changed Successfully!!!');
          return Redirect::to('/dashboard');


      }

      //newadmin

       public function add_admin()
    {
          $this->ChangeAdminAuthCheck();
          return view('add_admin');
    }

     public function save_newadmin(Request $request)

    {
       $admin_email=$request->admin_email;
       $admin_password=md5($request->admin_password);
       $result=DB::table('admin_tbl')
             ->where('admin_email',$admin_email)
             ->where('admin_password',$admin_password)
             ->first();

         if($result)

         {
            
         $data=array();
        $data['admin_email']=$request->newadmin_email;
        $data['admin_password']=md5($request->newadmin_password); 
        
        DB::table('admin_tbl')->insert($data);
        Session::put('message','NewAdmin Added Successfully !!');
        return redirect::to('/add-admin');
          
        
         }

         else
         {

          Session::put('invalid_message','Admin Username or password is Invalid');
          return Redirect::to('/add-admin');
         }

    }


      public function ChangeAdminAuthCheck()
   {
     $id=Session::get('id'); //admin id session theke niche...jodi thake taile id thakbe variable a ar noile null thakbe variable a.
     $reception_id=Session::get('reception_id');
     if($id)
     {

      return;
     }
    
     else
     {

      return Redirect::to('/')->send();
     }


   }



}