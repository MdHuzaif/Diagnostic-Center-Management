<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AppointController extends Controller
{
    //insert patient

     public function add_b_patient()
    {
          $this->AdminAuthCheck();
    	return view('b_patient_add');
    }

     public function save_b_patient(Request $request)

    {
        $data=array();
        $data['b_patient_name']=$request->b_patient_name;
        $data['b_patient_serial']=$request->b_patient_serial;
        $data['b_patient_date']=$request->b_patient_date;
        $data['b_patient_time']=$request->b_patient_time;
        $data['b_patient_contact']=$request->b_patient_contact;
        $data['b_patient_payment']=$request->b_patient_payment;
        $data['b_patient_due']=$request->b_patient_due;
        $data['doctor_id']=$request->doctor_id;
       
         // echo"<pre>";
         // print_r($data);
         // echo "</pre>";

        DB::table('tbl_appoint')->insert($data);
        Session::put('message','Paient Appointment Successfully !!');
        return redirect::to('/add-b-patient');

    }
//display
    
     public function  display_b_patient()
    {
         $this->AdminAuthCheck();
    	$all_b_patient_info['all_b_patient_info'] = DB::table('tbl_appoint')
    	                   ->join('tbl_doctor','tbl_appoint.doctor_id','=','tbl_doctor.doctor_id')
    	                   ->select('tbl_appoint.*','tbl_doctor.doctor_name')
    	                   ->orderBy('doctor_id','asc')
    	                   ->get();

    	 return view('b_patient_display',$all_b_patient_info);
                 
    	
    }

     //delete

      public function delete_b_patient($b_patient_id)


            {
               
               DB::table('tbl_appoint')
                 ->where('b_patient_id',$b_patient_id)
                 ->delete();
                 Session::put('delete_message','Patient Appointment Deleted Successfully!!');
                  return Redirect::to('/display-b-patient');

            }

             //update
       
         public function update_b_patient($b_patient_id)

    {
             $this->AdminAuthCheck();
        $b_patient_description_profile['b_patient_description_profile']=DB::table('tbl_appoint')
                                  ->select('b_patient_id','b_patient_name','b_patient_serial','b_patient_date','b_patient_time','b_patient_contact','b_patient_payment','b_patient_due')
                                  ->where('b_patient_id',$b_patient_id)
                                  ->first();
          
                  
              return view('update_b_patient',$b_patient_description_profile);
    }
       //update student info

      public function save_update_b_patient(Request $request,$b_patient_id)
      {
        $data=array();
        $data['b_patient_name']=$request->b_patient_name;
        $data['b_patient_serial']=$request->b_patient_serial;
        $data['b_patient_date']=$request->b_patient_date;
        $data['b_patient_time']=$request->b_patient_time;
        $data['b_patient_contact']=$request->b_patient_contact;
        $data['b_patient_payment']=$request->b_patient_payment;
        $data['b_patient_due']=$request->b_patient_due;
        
         
         DB::table('tbl_appoint')
               ->where('b_patient_id',$b_patient_id)
               ->update($data);
          Session::put('update_message','Appointment Updated Successfully!!!');
          return Redirect::to('/display-b-patient');


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
