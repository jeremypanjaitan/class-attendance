<?php

namespace App\Services\EmailVerification;

use App\Mail\EmailVerification\EmailVerificationMailable;
use Illuminate\Support\Facades\Mail;

class EmailVerificationService
{
    public function sendAbsensiAuthCode(AuthDataDTO $userAuthData)
    {
        // TODO: generate auth code

        Mail::to('jeremypanjaitan@gmail.com')->send(new EmailVerificationMailable($userAuthData));
    }
}
