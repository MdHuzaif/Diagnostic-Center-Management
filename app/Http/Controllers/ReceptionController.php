<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ReceptionController extends Controller
{
    //insert


     public function add_reception()
    {
        $this->EditReceptionAuthCheck();
    	return view('add_reception');
    }


     public function confirm_reception(Request $request)

    {
       $admin_email=$request->admin_username;
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
            
         $data=array();
        $data['reception_name']=$request->reception_name;
        $data['reception_phone']=$request->reception_phone;
        $data['reception_address']=$request->reception_address;
        $data['reception_username']=$request->reception_username;
        $data['reception_password']=md5($request->reception_password); 
        
        DB::table('tbl_reception')->insert($data);
        Session::put('message','Receptionist Added Successfully !!');
        return redirect::to('/add-reception');
         	
        
         }

         else
         {

         	Session::put('invalid_message','Admin Username or password is Invalid');
         	return Redirect::to('/add-reception');
         }

    }

     //login
     public function reception_index()

    {


    	return view('reception_login');
    }

    

    public function reception_dashboard(Request $request)

    {
       $reception_username=$request->reception_username;
       $reception_password=md5($request->reception_password);
       $result=DB::table('tbl_reception')
             ->where('reception_username',$reception_username)
             ->where('reception_password',$reception_password)
             ->first();

            // echo"<pre>";
            // print_r($result);
            // exit();

         if($result)

         {

         	Session::put('reception_username',$result->reception_username);
         	Session::put('reception_id',$result->reception_id);
         	return Redirect::to('/dashboard');
         }

         else
         {

         	Session::put('message','Username or Password Invalid');
         	return Redirect::to('/reception');
         }

    }
    
    //display

     public function  display_reception()
    {
         $this->EditReceptionAuthCheck();
    	$all_reception_info['all_reception_info'] = DB::table('tbl_reception')->get();
    	
    	 return view('display_reception',$all_reception_info);
                 
    	
    }
//delete

      public function delete_reception($reception_id)


            {
               
               DB::table('tbl_reception')
                 ->where('reception_id',$reception_id)
                 ->delete();

                 Session::put('delete_message','Receptionist Deleted Successfully!!');
                  return Redirect::to('/display-reception');

            }

        //update    

     public function update_reception($reception_id)

    {
         $this->EditReceptionAuthCheck();
        $reception_description_profile['reception_description_profile']=DB::table('tbl_reception')
                                  ->select('*')
                                  ->where('reception_id',$reception_id)
                                  ->first();
          
                  
           return view('update_reception',$reception_description_profile);
    }
       

      public function save_update_reception(Request $request,$reception_id)
      {
        $data=array();
        $data['reception_name']=$request->reception_name;
        $data['reception_phone']=$request->reception_phone;
        $data['reception_address']=$request->reception_address;
        $data['reception_username']=$request->reception_username;
        $data['reception_password']=md5($request->reception_password);
        
        
         DB::table('tbl_reception')
               ->where('reception_id',$reception_id)
               ->update($data);
          Session::put('update_message','Profile Updated Successfully!!!');
          return Redirect::to('/display-reception');


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

    public function EditReceptionAuthCheck()
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
