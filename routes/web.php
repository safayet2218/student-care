<?php

Route::get('/', function () {
    return view('admin.first');
    // return view('student_login');
});
Route::get('/admin', function () {
    return view('admin.admin_login');
});

Route::get('/student', function () {
    return view('student_login');
});

// get student info
Route::get('/student/{id}', 'CounclingController@get_roll')->name('student.info');
// get teacher info
Route::get('/teacher/{id}', 'Message@get_info')->name('teacher.info');

//admin login
Route::post('/adminlogin', 'AdminController@login_admin');
Route::get('/dashboard', 'AdminController@show_dashboard');
//teacher logout
Route::get('/teacher_logout', 'AdminController@teacherlogout');


//student login
Route::post('/studentlogin', 'StudentController@login_student');
Route::get('/studentdashboard', 'StudentController@studentdashboard');

//student after login part
Route::get('/student_profile', 'StudentController@studentprofile');
Route::get('/student_logout', 'StudentController@studentlogout');
Route::get('/student_setting', 'StudentController@studentsetting');

//addstudent route
Route::get('/addstudent', 'AddstudentController@addstudent');
Route::post('/save-student', 'AddstudentController@save_student');

//allstudent
Route::get('/allstudent', 'AllstudentController@all_student');
Route::get('/view/{student_id}', 'AllstudentController@view_student');
Route::get('/edit_student/{student_id}', 'AllstudentController@editstudent');
Route::post('/update-student/{student_id}', 'AllstudentController@studentupdate');
Route::get('/delete_student/{student_id}', 'AllstudentController@studentdelete');


//add with teacher
Route::get('/addWithTeacher', 'AddwithteacherController@addwithteacher');
Route::post('/addWithTeacher', 'AddwithteacherController@store_with_teacher')->name('store.with.teacher');

//Teacher send message
Route::get('/message', 'Message@message_send');
Route::post('/message', 'Message@send_message')->name('send.message');
//student send message
Route::get('/student_message', 'Message@student_messagesend');
Route::post('/student_message', 'Message@student_send_message')->name('student.send.message');

//course router
Route::get('/cse', 'CseController@cse');
Route::get('/eee', 'EeeController@eee');
Route::get('/bba', 'BbaController@bba');
Route::get('/ece', 'EceController@ece');
Route::get('/mba', 'MbaController@mba');

//teacher router
Route::get('/allteacher', 'TeacherController@all_teacher');
Route::get('/addteacher', 'TeacherController@addteacher');
Route::post('/save-teacher', 'TeacherController@save_teacher');

//coucling route
Route::get('/addCouncling', 'CounclingController@addcouncling');
Route::post('/save_counselling', 'CounclingController@save_counselling')->name('save.counselling');
Route::get('/allCouncling', 'CounclingController@allcouncling');
Route::get('/all_counselling/{roll}', 'CounclingController@student_counselling')->name('all.counselling.student');
//notification
Route::get('/notification', 'notificationController@SendNotification');
Route::post('/send_notification', 'notificationController@send_notification');

//result
Route::post('/save-result', 'ResultController@saveresult');
Route::get('/student_result_show/{roll}', 'ResultController@get_result');

//parentsMetting
Route::get('/parentsMetting', 'parentsController@arrangeMetting');
Route::post('/parentsMeeting', 'parentsController@sendArrangeMeeting')->name('parents.meeting');




