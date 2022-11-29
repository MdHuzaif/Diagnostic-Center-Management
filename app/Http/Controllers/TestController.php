<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class TestController extends Controller
{
     //insert test
    public function add_test()
    {
          $this->AdminAuthCheck();
    	return view('add_test');
    }

     public function save_test(Request $request)

    {
        $data=array();
        $data['test_name']=$request->test_name;
        $data['test_price']=$request->test_price;
        
        DB::table('tbl_testnames')->insert($data);
        Session::put('message','NewTest Added Successfully !!');
        return redirect::to('/add-test');

    }
    //dispaly page

     public function  display_test()
    {
         $this->AdminAuthCheck();
    	$all_test_info['all_test_info'] = DB::table('tbl_testnames')->get();
    	
    	 return view('display_test',$all_test_info);
                 
    	
    }


     //delete

      public function delete_test($test_id)


            {
               
               DB::table('tbl_testnames')
                 ->where('test_id',$test_id)
                 ->delete();

                 Session::put('delete_message','TestName Deleted Successfully!!');
                  return Redirect::to('/display-test');

            }
       //update
       
         public function update_test($test_id)

    {
             $this->AdminAuthCheck();
        $test_description_profile['test_description_profile']=DB::table('tbl_testnames')
                                  ->select('*')
                                  ->where('test_id',$test_id)
                                  ->first();
          
                  
              return view('update_test',$test_description_profile);
    }
       //update student info

      public function save_update_test(Request $request,$test_id)
      {
        $data=array();
        $data['test_name']=$request->test_name;
        $data['test_price']=$request->test_price;    
         DB::table('tbl_testnames')
               ->where('test_id',$test_id)
               ->update($data);
          Session::put('update_message','Test Description Updated Successfully!!!');
          return Redirect::to('/display-test');


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
