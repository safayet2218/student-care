<?php

namespace App\Jobs;

use App\Mail\EmailSendNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEmailNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $student;
    protected $notification;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($student, $notification)
    {
        $this->student = $student;
        $this->notification = $notification;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new EmailSendNotification($this->student, $this->notification);
 //        Mail::to('prolay778899@gmail.com')->send($email);
       Mail::to($this->student->student_email)->send($email);
    }
}
