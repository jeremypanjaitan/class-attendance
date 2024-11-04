<?php

namespace App\Http\Controllers;

use App\Services\Absensi\AbsensiDTO;
use App\Services\Absensi\AbsensiService;
use Illuminate\Http\Request;

class WebAbsensiController extends Controller
{

    private AbsensiService $absensiService;

    public function __construct(AbsensiService $absensiService)
    {
        $this->absensiService = $absensiService;
    }
    public function index()
    {
        return view('absensi');
    }

    public function initiateAbsensi(Request $request)
    {
        $email = $request->input('email');
        $namaKelas = $request->input('nama_kelas');
        $fullName = $request->input('full_name');
        $nim = $request->input('nim');
        $absensiDto = new AbsensiDTO($fullName, $namaKelas, $email, $nim);

        $this->absensiService->initiateAbsensi($absensiDto);


        session()->flash('success', 'Silahkan cek authentication code pada email anda !');

        return redirect()->route('absensi')->with('active-tab', 'nav-buat-absensi-tab');

    }

    public function executeAbsensi(Request $request)
    {
        $email = $request->input('email');
        $authCode = $request-> input('auth_code');

        $this->absensiService->executeAbsensi($email, $authCode);

        session()->flash('success','Absensi berhasil di tambahkan !');
        return redirect()->route('absensi')->with('active-tab','nav-validasi-absensi-tab');
    }

}
