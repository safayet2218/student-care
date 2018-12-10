<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class MbaController extends Controller
{
     public function mba(){
           $mba_student_info=DB::table('student_tbl')
    						  ->where('student_department','=','MBA')
    		                  ->get();
     	   $manage_mba=view('admin.mba')
     					->with('mba_student_info',$mba_student_info);


     	return view('layout')
     			->with('admin.mba',$manage_mba);
     }
}
