<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class AddwithteacherController extends Controller
{
    public function addwithteacher()
    {
        return view('student.addwithteacher');
    }

    public function store_with_teacher(Request $request)
    {
        $initial = $request->initial;
        $result = DB::table('teacher_tbl')->where('teacher_initial', $initial)->first();

        if($result == null){
            Session::flash('error', 'No teacher available with this initial. Try again!');
            return back();
        }

        if(!$this->check_student_added_with_teacher(Session::get('student_id'), $result->teacher_id))
        {
            $data = array();
            $data['student_id'] = Session::get('student_id');
            $data['teacher_id'] = $result->teacher_id;

            DB::table('enrolled')->insert($data);
            Session::flash('success', 'You have successfully enrolled!');
            return back();
        }
    }

    private function check_student_added_with_teacher($student_id, $teacher_id)
    {
        return DB::table('enrolled')->where('student_id', $student_id)->where('teacher_id', $teacher_id)->exists();
    }
}