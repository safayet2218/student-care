<?php

namespace App\Http\Controllers;

use App\Mail\EmailArrangeMeeting;
use Illuminate\Http\Request;


use app\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();


class ParentsController extends Controller
{
    public function arrangeMetting()
    {
        $students = DB::table('student_tbl')->get();
        return view('admin.parentsMetting', compact('students'));
    }

    public function sendArrangeMeeting(Request $request)
    {
        $email = new EmailArrangeMeeting($request->subject);
//        Mail::to('prolay778899@gmail.com')->send($email);
        Mail::to($request->student_email)->send($email);
        Session::flash('success', 'Email send success');
        return back();
    }

    public function get_roll($id)
    {
        $student = Db::table('student_tbl')->where('student_id', $id)->first();
        return response()->json(['student' => $student]);
    }
}
