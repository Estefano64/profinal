<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $bodyMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $bodyMessage)
    {
        $this->subject = $subject;
        $this->bodyMessage = $bodyMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.userNotification')
                    ->with('bodyMessage', $this->bodyMessage);
    }
}
