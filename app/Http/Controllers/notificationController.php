<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailNotification;
use Illuminate\Http\Request;

use app\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class notificationController extends Controller
{

    public function SendNotification()
    {
        return view('admin.notification');
    }

    public function send_notification(Request $request)
    {
        $students = DB::select('select * from student_tbl');
        foreach ($students as $student) {
            dispatch(new SendEmailNotification($student, $request->notification_content));
//            $data = array('name' => "Sam Jose", "body" => "Test mail");
//
//            Mail::queue('emails.mail', $data, function ($message) {
//                $message->to('prolay778899@gmail.com', 'Artisans Web')
//                    ->subject('Mail from Teacher');
//                $message->from('prolay778899@gmail.com', 'Sajid Sayyad');
//            });
        }
        $data = array();
        $data['notification_content'] = $request->notification_content;

        DB::table('notification_tbl')->insert($data);
        Session::put('message', 'Send  notification for all student is successfully!!!');
        return Redirect::to('/notification');
    }

//   public function getNotification(){
    //       $data['data']=DB::table('notification_tbl')->get();
//
    //      if(count($data)>0){
    //     return view('admin.notification',$data)
    //    }else{
    //     return view('admin.notification');
    //   }
    // }
}
