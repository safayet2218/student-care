<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use app\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();


class AdminController extends Controller
{
    public function login_admin(Request $reguest)
    {
        $email = $reguest->teacher_email;
        $password = $reguest->password;

        $result = DB::table('teacher_tbl')
            ->where('teacher_email', $email)
            ->where('password', $password)
            ->first();

        if ($result) {
            Session::put('teacher_name', $result->teacher_Name);
            Session::put('teacher_id', $result->teacher_id);
            return Redirect::to('/dashboard');

        } else {
            Session::put('message', 'email and password are not match');
            return Redirect::to('/admin');

        }

    }

    public function show_dashboard()
    {
        return view('admin.dashboard');
    }


    public function teacherlogout()
    {
        Session::put('teacher_name', null);
        Session::put('teacher_id', null);

        return Redirect::to('/admin');
    }

}

