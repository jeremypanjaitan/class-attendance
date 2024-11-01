<?php

namespace App\Services\Absensi;

use App\Helpers\AuthCodeGenerator;
use App\Models\Absensi;
use App\Services\Absensi\AbsensiDTO;
use App\Services\EmailVerification\AuthDataDTO;
use App\Services\EmailVerification\EmailVerificationService;

class AbsensiService
{
    private EmailVerificationService $emailVerificationService;

    public function __construct(EmailVerificationService $emailVerificationService)
    {
        $this->emailVerificationService = $emailVerificationService;
    }

    public function initiateAbsensi(AbsensiDTO $absensiDTO)
    {
        $authCode = AuthCodeGenerator::generateAuthCode();

        Absensi::create(
            [
                'full_name' => $absensiDTO->fullName,
                'email' => $absensiDTO->email,
                'nama_kelas' => $absensiDTO->namaKelas,
                'status' => 'IN_PROGRESS',
                'auth_code' => $authCode,
                'kehadiran' => 'HADIR'
            ]
        );

        $authUserData = new AuthDataDTO($absensiDTO->email, $absensiDTO->namaKelas, $authCode);
        $this->emailVerificationService->sendAbsensiAuthCode($authUserData);
    }
}
