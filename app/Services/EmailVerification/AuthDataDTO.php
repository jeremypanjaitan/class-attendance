<?php

namespace App\Services\EmailVerification;



class AuthDataDTO
{
    public string $email;
    public string $namaKelas;
    public string $authCode;

    /**
     * @param string $email
     * @param string $namaKelas
     * @param string $authCode
     */
    public function __construct(string $email, string $namaKelas, string $authCode)
    {
        $this->email = $email;
        $this->namaKelas = $namaKelas;
        $this->authCode = $authCode;
    }
}
