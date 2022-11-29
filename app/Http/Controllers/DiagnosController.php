<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class DiagnosController extends Controller
{
    //insert

    public function add_t_patient()
    {
          $this->AdminAuthCheck();
    	return view('t_patient_add');
    }

     public function save_t_patient(Request $request)

    {
        $data=array();
        $data['t_patient_name']=$request->t_patient_name;
        $data['t_patient_contact']=$request->t_patient_contact;
        $data['t_patient_serial']=$request->t_patient_serial;
        $data['t_patient_testname']=implode(",", $request->test);
        $data['t_patient_total']=$request->t_patient_total;
        $data['t_patient_due']=$request->t_patient_due;
        $data['t_patient_discount']=$request->t_patient_discount;
        $data['t_patient_deliverydate']=$request->t_patient_delivarydate;  
         // echo"<pre>";
         // print_r($data);
         // echo "</pre>";

        DB::table('tbl_diagnos')->insert($data);
        Session::put('message','Patient Added Successfully !!');
        return redirect::to('/add-t-patient');

    }
       //display

     //dispaly page

     public function  display_t_patient()
    {
         $this->AdminAuthCheck();
    	$all_t_patient_info['all_t_patient_info'] = DB::table('tbl_diagnos')->get();
    	
    	 return view('t_patient_display',$all_t_patient_info);
                 
    	
    }
      //delete

      public function delete_t_patient($t_patient_id)


            {
               
               DB::table('tbl_diagnos')
                 ->where('t_patient_id',$t_patient_id)
                 ->delete();

                 Session::put('delete_message','Patient Report Delivered Successfully!!');
                  return Redirect::to('/display-t-patient');

            }

       //update
       
         public function update_t_patient($t_patient_id)

    {
             $this->AdminAuthCheck();
        $t_patient_description_profile['t_patient_description_profile']=DB::table('tbl_diagnos')
                                  ->select('*')
                                  ->where('t_patient_id',$t_patient_id)
                                  ->first();
          
                  
              return view('update_t_patient',$t_patient_description_profile);
    }
       //update student info

      public function save_update_t_patient(Request $request,$t_patient_id)
      {
        $data=array();
        $data['t_patient_name']=$request->t_patient_name;
        $data['t_patient_contact']=$request->t_patient_contact;
        $data['t_patient_serial']=$request->t_patient_serial;
        $data['t_patient_testname']=$request->t_patient_testname;
        $data['t_patient_total']=$request->t_patient_total;
        $data['t_patient_due']=$request->t_patient_due;
        $data['t_patient_discount']=$request->t_patient_discount;
        $data['t_patient_deliverydate']=$request->t_patient_deliverydate;  
               
         DB::table('tbl_diagnos')
               ->where('t_patient_id',$t_patient_id)
               ->update($data);
          Session::put('update_message','Patient Information Updated Successfully!!!');
          return Redirect::to('/display-t-patient');


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
