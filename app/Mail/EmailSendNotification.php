<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class EmailSendNotification extends Mailable
{
    use Queueable, SerializesModels;
    protected $notification;
    protected $student;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($student, $notification)
    {
        $this->student = $student;
        $this->notification = $notification;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mail')->with([
            'notification' => $this->notification,
        ]);
    }
}
