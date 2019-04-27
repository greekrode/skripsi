<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplication extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var JobApplication
     */
    public $jobApplication;

    /**
     * @var User
     */
    public $user;

    private $resume;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\App\Model\JobApplication $jobApplication, User $user, $resume)
    {
        $this->jobApplication = $jobApplication;
        $this->user = $user;
        $this->resume = $resume;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->resume) {
            return $this->view('emails.application')
                ->subject('Job Application')
                ->attach($this->resume->getRealPath(),[
                    'as' => $this->resume->getClientOriginalName(),
                    'mime' => $this->resume->getClientMimeType()
                ]);
        }

        return $this->view('emails.application')
            ->subject('Job Application');
    }
}
