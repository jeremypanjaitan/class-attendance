<?php

namespace App\Mail\EmailVerification;

use App\Services\EmailVerification\AuthDataDTO;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerificationMailable extends Mailable
{
    use Queueable, SerializesModels;

    public AuthDataDTO $data;
    public function __construct(AuthDataDTO $data)
    {
        $this->data = $data;
    }
    public function build()
    {
        return $this->view('emails.email-verification')->with('data', $this->data)->subject('Email Verification');
    }
}
