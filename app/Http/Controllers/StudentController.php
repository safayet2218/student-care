<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class StudentController extends Controller
{
    public function login_student(Request $reguest){
    	$email=$reguest->student_email;
     	$password=$reguest->student_password;

     	$result=DB::table('student_tbl')
     			->where('student_email',$email)
     			->where('student_password',$password)
     			->first();
     			 

     			 if ($result) {
     			 	Session::put('student_name',$result->student_name);
     			 	Session::put('student_id',$result->student_id);
     			 	return Redirect::to('/studentdashboard');


     			 }else{
     			 	Session::put('message','email and password are not match');
     			 	return Redirect::to('/');

     			 }

     			 }

     			 public function studentdashboard(){
     	               return view('student_layout');
     }


     //student profile show function
      public function studentprofile(){
           $student_id=Session::get('student_id');
           $student_profile=DB::table('student_tbl')
                             ->select('*') 
                             ->where('student_id',$student_id)
                             ->first();

          $manage_student=view('student.student_view')
                           ->with('student_profile',$student_profile);
          return view('student_layout')
                    ->with('student_view', $manage_student);
     }

     //student logout function
      public function studentlogout(){
               Session::put('student_name',null);
               Session::put('student_id',null);

               return Redirect::to('/');
     }
     //student setting functions
       public function studentsetting(){
          $id = Session::get('student_id');
          $student=DB::table('student_tbl')
                             ->select('*') 
                             ->where('student_id',$id)
                             ->first();
          //dd($student);
        return view('student.student_setting', compact('student'));
     }

}
