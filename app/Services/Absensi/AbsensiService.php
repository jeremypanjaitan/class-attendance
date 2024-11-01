<?php

namespace App\Services\Absensi;

use App\Helpers\AuthCodeGenerator;
use App\Models\Absensi;
use App\Services\EmailVerification\AuthDataDTO;
use App\Services\EmailVerification\EmailVerificationService;

class AbsensiService
{
    private EmailVerificationService $emailVerificationService;

    public function __construct(EmailVerificationService $emailVerificationService)
    {
        $this->emailVerificationService = $emailVerificationService;
    }

    public function initiateAbsensi(AbsensiDTO $absensiDTO): bool
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
        return true;
    }

    public function executeAbsensi(string $email, string $authCode): bool
    {
        $isAbsensiMahasiswaExist = Absensi::where('email', $email)->where('auth_code', $authCode)->exists();

        if (!$isAbsensiMahasiswaExist) {
            return false;
        }

        Absensi::where('email', $email)->where('auth_code', $authCode)->update(['status' => 'SUCCESS']);
        return true;
    }
}
