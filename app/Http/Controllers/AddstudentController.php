<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();


class AddstudentController extends Controller
{
    public function addstudent()
    {
        return view('admin.addstudent');
    }


    public function save_student(Request $request)
    {

        $data = array();
        $data['student_name'] = $request->student_name;
        $data['student_roll'] = $request->student_roll;
        $data['student_fathername'] = $request->student_fathername;
        $data['student_mothername'] = $request->student_mothername;
        $data['student_email'] = $request->student_email;
        $data['student_password'] = $request->student_password;
        $data['student_address'] = $request->student_address;
        $data['student_year'] = $request->student_year;
        $data['student_department'] = $request->student_department;


        $image = $request->file('student_image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = "image/";
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $data['student_image'] = $image_url;

                DB::table('student_tbl')->insert($data);
                Session::put('message', 'product added successfully!!!');
                return Redirect::to('/addstudent');
            }


        }


        $data['student__image'] = '';
        DB::table('student_tbl')->insert($data);
        Session::put('message', 'product added successfully without image!!!');
        return Redirect::to('/addstudent');

    }


}
