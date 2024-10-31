<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\EmailVerification\EmailVerificationService;
use App\Services\EmailVerification\AuthDataDTO;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    protected EmailVerificationService $emailVerificationService;


    //  Type hinting ProductService di constructor
    public function __construct(EmailVerificationService $emailVerificationService)
    {
        $this->emailVerificationService = $emailVerificationService;
    }

    public function initiateAbsensi(Request $request)
    {
        $email = $request->json('email');
        $nama_kelas = $request->json('nama_kelas');
        $authDataDto = new AuthDataDTO($email, $nama_kelas, '12345');


        $this->emailVerificationService->sendAbsensiAuthCode($authDataDto);
    }
}
