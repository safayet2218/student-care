<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

class ResultController extends Controller
{
    public function saveresult(Request $request){

    	  DB::table('result')->insert([
            'student_name' => $request->student_name,
            'student_roll' => $request->student_roll,
            'student_semester' => $request->student_semester,
            'student_result' => $request->student_result
        ]);
        return \redirect()->back();


    }

     public function get_result($roll)
    {
        $results = DB::table('result')->where('student_roll', $roll)->get();
        return view('student.student_result', compact('results'));
    }

}
