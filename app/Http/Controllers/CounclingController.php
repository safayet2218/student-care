<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();


class CounclingController extends Controller
{
    public function addcouncling()
    {
        $students = DB::table('student_tbl')->get();
        return view('admin.add_councling', compact('students'));
    }

    public function save_counselling(Request $request)
    {
        $counselling = DB::table('counselling')->insert([
            'student_roll' => $request->student_roll,
            'student_name' => $request->student_name,
            'semester' => $request->semester,
            'reason' => $request->reason,
            'action' => $request->action,
            'date' => $request->date,
            'subject' => $request->comment
        ]);

        return \redirect()->back();
    }

    public function student_counselling($roll)
    {
        $counsellings = DB::table('counselling')->where('student_roll', $roll)->get();
        return view('admin.student_counselling', compact('counsellings'));
    }

    public function get_roll($id)
    {
        $student = Db::table('student_tbl')->where('student_id', $id)->first();
        return response()->json(['student' => $student]);
    }

    public function allcouncling()
    {
        return view('admin.all_councling');
    }
}
