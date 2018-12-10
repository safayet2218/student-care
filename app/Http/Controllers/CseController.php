<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();


class CseController extends Controller
{
    public function cse(){
     	
    		$cse_student_info=DB::table('student_tbl')
    						  ->where('student_department','=','CSE')
    		                  ->get();
     	   $manage_cse=view('admin.cse')
     					->with('cse_student_info',$cse_student_info);


     	return view('layout')
     			->with('admin.cse',$manage_cse);
   
     }
}
