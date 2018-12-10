<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();


class Message extends Controller
{
    public function message_send()
    {
        $students = DB::table('student_tbl')->get();
        return view('admin.message', compact('students'));
    }

    // for post request
    public function send_message(Request $request)
    {
        $teacher_info = DB::table('teacher_tbl')
            ->where('teacher_id', Session::get('teacher_id'))
            ->first();
        DB::table('message')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'teacher_name' => $teacher_info->teacher_Name
        ]);
        return \redirect()->back();
    }

    public function student_messagesend()
    {
        $teachers = DB::select('select * from teacher_tbl');
        return view('student.student_messageSend', compact('teachers'));
    }

    // post request to send message to teacher from student
    public function student_send_message(Request $request)
    {
        $student_id = Session::get('student_id');
        $student_info = DB::table('student_tbl')
            ->where('student_id', $student_id)
            ->first();
        DB::table('student_to_teacher_message')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'student_name' => $student_info->student_name
        ]);

        return \redirect()->back();
    }

    public function get_info($id)
    {
        $teacher = Db::table('teacher_tbl')->where('teacher_id', $id)->first();
        return response()->json(['teacher' => $teacher]);
    }
}
