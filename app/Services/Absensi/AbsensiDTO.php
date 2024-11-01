<?php

namespace App\Services\Absensi;

class AbsensiDTO
{
    public string $fullName;
    public string $namaKelas;
    public string $email;

    public function __construct(string $fullName, string $namaKelas, string $email) {
        $this->fullName = $fullName;
        $this->namaKelas = $namaKelas;
        $this->email = $email;
    }

}
