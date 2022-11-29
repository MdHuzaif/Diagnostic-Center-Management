<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class DoctorController extends Controller
{
   
   //insert doctor
    public function add_doctor()
    {
          $this->AdminAuthCheck();
    	return view('add_doctor');
    }

     public function save_doctor(Request $request)

    {
        $data=array();
        $data['doctor_id']=$request->doctor_id;
        $data['doctor_name']=$request->doctor_name;
        $data['qualification']=$request->qualification;
        $data['specialist']=$request->specialist;
        $data['doctor_fees']=$request->doctor_fees;
          
         // echo"<pre>";
         // print_r($data);
         // echo "</pre>";

        DB::table('tbl_doctor')->insert($data);
        Session::put('message','Doctor Added Successfully !!');
        return redirect::to('/add-doctor');

    }

    //dispaly page

     public function  display_doctor()
    {
         $this->AdminAuthCheck();
    	$all_doctor_info['all_doctor_info'] = DB::table('tbl_doctor')->get();
    	
    	 return view('display_doctor',$all_doctor_info);
                 
    	
    }
     
     //delete

      public function delete_doctor($doctor_id)


            {
               
               DB::table('tbl_doctor')
                 ->where('doctor_id',$doctor_id)
                 ->delete();

                 Session::put('delete_message','Doctor Deleted Successfully!!');
                  return Redirect::to('/display-doctor');

            }


         //update
       
         public function update_doctor($doctor_id)

    {
             $this->AdminAuthCheck();
        $doctor_description_profile['doctor_description_profile']=DB::table('tbl_doctor')
                                  ->select('*')
                                  ->where('doctor_id',$doctor_id)
                                  ->first();
          
                  
              return view('update_doctor',$doctor_description_profile);
    }
       //update student info

      public function save_update(Request $request,$doctor_id)
      {
        $data=array();
        $data['doctor_name']=$request->doctor_name;
        $data['qualification']=$request->qualification;
        $data['specialist']=$request->specialist;
        $data['doctor_fees']=$request->doctor_fees;
        
         
         DB::table('tbl_doctor')
               ->where('doctor_id',$doctor_id)
               ->update($data);
          Session::put('update_message','Profile Updated Successfully!!!');
          return Redirect::to('/display-doctor');


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
