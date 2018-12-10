<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class EeeController extends Controller
{
     public function eee(){
     	$eee_student_info=DB::table('student_tbl')
    						  ->where('student_department','=','EEE')
    		                  ->get();
     	   $manage_eee=view('admin.eee')
     					->with('eee_student_info',$eee_student_info);


     	return view('layout')
     			->with('admin.eee',$manage_eee);
     }
}
