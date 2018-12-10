<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;


use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();


class AllstudentController extends Controller
{
    public function all_student()
    {
        $teacher_id = Session::get('teacher_id');
        $results = DB::table('enrolled')->where('teacher_id', $teacher_id)->get();
        $students = Collection::make();
        foreach ($results as $result) {
            $students->add(DB::table('student_tbl')->where('student_id', $result->student_id)->first());
        }

        return view('admin.allstudent', compact('students'));
    }

    public function view_student($student_id)
    {
        $student_view_details = DB::table('student_tbl')
            ->select('*')
            ->where('student_id', $student_id)
            ->first();

        $manage_student_details = view('admin.view')
            ->with('student_view_details', $student_view_details);


        return view('layout')
            ->with('admin.view', $manage_student_details);
    }

    //student edit function
    public function editstudent($student_id)
    {
        $student_view_details = DB::table('student_tbl')
            ->select('*')
            ->where('student_id', $student_id)
            ->first();

        $manage_student_details = view('admin.student_edit')
            ->with('student_view_details', $student_view_details);


        return view('layout')
            ->with('admin.student_edit', $manage_student_details);


    }

//student update part are here
    public function studentupdate(Request $request, $student_id)
    {
        $data = array();

        $data['student_name'] = $request->student_name;
        $data['student_roll'] = $request->student_roll;
        $data['student_fathername'] = $request->student_fathername;
        $data['student_mothername'] = $request->student_mothername;
        $data['student_email'] = $request->student_email;
        $data['student_address'] = $request->student_address;
        $data['student_year'] = $request->student_year;
        $data['student_department'] = $request->student_department;


        DB::table('student_tbl')
            ->where('student_id', $student_id)
            ->update($data);

        return Redirect::to('/allstudent');

    }

    //delete student part are here

    public function studentdelete($student_id)
    {

        DB::table('student_tbl')
            ->where('student_id', $student_id)
            ->delete();
        return Redirect::to('/allstudent');

    }
}
