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
        $absensiDto = new AbsensiDTO($fullName, $namaKelas, $email);


        $this->absensiService->initiateAbsensi($absensiDto);
    }
}
