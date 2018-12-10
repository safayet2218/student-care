<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Validator;

session_start();


class TeacherController extends Controller
{
    public function addteacher()
    {
        return view('admin.addteacher');
    }

    public function save_teacher(Request $request)
    {
        $request->validate([
            'teacher_initial' => 'required|unique:teacher_tbl|max:6',
            'teacher_name' => 'required',
            'teacher_email' => 'required|email',
            'teacher_phone' => 'required',
        ]);
        $data = array();
        $data['teacher_name'] = $request->teacher_name;
        $data['teacher_email'] = $request->teacher_email;
        $data['teacher_phone'] = $request->teacher_phone;
        $data['teacher_initial'] = $request->teacher_initial;
        $data['password'] = $request->password;

        $data['teacher_department'] = $request->teacher_department;

        $image = $request->file('teacher_image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = "image/";
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $data['teacher_image'] = $image_url;

                DB::table('teacher_tbl')->insert($data);
                Session::put('message', 'Teacher added successfully!!!');
                return Redirect::to('/addteacher');
            }
        }


        $data['teacher_image'] = '';
        DB::table('teacher_tbl')->insert($data);
        Session::put('message', 'Teacher added successfully without image!!!');
        return Redirect::to('/addteacher');

    }


    public function all_teacher()
    {
        $all_teacher_info = DB::table('teacher_tbl')
            ->get();
        $manage_teacher = view('admin.allteacher')
            ->with('all_teacher_info', $all_teacher_info);


        return view('layout')
            ->with('admin.allteacher', $manage_teacher);
    }
}
