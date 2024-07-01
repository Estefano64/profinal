<?php

namespace App\Jobs;

use App\Mail\UserNotificationMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendUserNotificationMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $subject;
    protected $bodyMessage;
    protected $recipients;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($subject, $bodyMessage, $recipients)
    {
        $this->subject = $subject;
        $this->bodyMessage = $bodyMessage;
        $this->recipients = $recipients;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->recipients as $recipient) {
            Mail::to($recipient)->send(new UserNotificationMail($this->subject, $this->bodyMessage));
        }
    }
}
