<?php

namespace App\Services\Absensi;

class AbsensiDTO
{
    public string $fullName;
    public string $namaKelas;
    public string $email;
    public string $nim;

    public function __construct(string $fullName, string $namaKelas, string $email, string $nim) {
        $this->fullName = $fullName;
        $this->namaKelas = $namaKelas;
        $this->email = $email;
        $this->nim = $nim;
    }

}
