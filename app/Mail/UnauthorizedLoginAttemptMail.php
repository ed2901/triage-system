<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UnauthorizedLoginAttemptMail extends Mailable
{
    use SerializesModels;

    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.unauthorized-login')->with(['email' => $this->email]);
    }
}