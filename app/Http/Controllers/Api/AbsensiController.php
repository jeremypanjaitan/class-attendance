<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Absensi\AbsensiDTO;
use App\Services\Absensi\AbsensiService;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    protected AbsensiService $absensiService;


    //  Type hinting ProductService di constructor
    public function __construct(AbsensiService $absensiService)
    {
        $this->absensiService = $absensiService;
    }

    public function initiateAbsensi(Request $request)
    {
        $email = $request->json('email');
        $namaKelas = $request->json('nama_kelas');
        $fullName = $request->json('full_name');
        $nim = $request->json('nim');
        $absensiDto = new AbsensiDTO($fullName, $namaKelas, $email, $nim);


        $this->absensiService->initiateAbsensi($absensiDto);
        return "success";
    }

    public function executeAbsensi(Request $request)
    {
        $email = $request->json('email');
        $nim = $request->json('auth_code');

        $this->absensiService->executeAbsensi($email, $nim);
        return "success";
    }
}
