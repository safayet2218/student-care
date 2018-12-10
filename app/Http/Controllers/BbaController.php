<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class BbaController extends Controller
{
    public function bba(){
     	
     	$bba_student_info=DB::table('student_tbl')
    						  ->where('student_department','=','BBA')
    		                  ->get();
     	   $manage_bba=view('admin.bba')
     					->with('bba_student_info',$bba_student_info);


     	return view('layout')
     			->with('admin.bba',$manage_bba);
    
     }
}
