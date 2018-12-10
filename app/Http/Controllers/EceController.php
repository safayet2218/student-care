<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class EceController extends Controller
{
     public function ece(){
     	$ece_student_info=DB::table('student_tbl')
    						  ->where('student_department','=','ECE')
    		                  ->get();
     	   $manage_ece=view('admin.ece')
     					->with('ece_student_info',$ece_student_info);


     	return view('layout')
     			->with('admin.ece',$manage_ece);
     }
}
