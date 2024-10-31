<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NamaMailable;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Judul Email',
            'message' => 'Hello jeremy panjaitan'
        ];

        Mail::to('jeremypanjaitan@gmail.com')->send(new NamaMailable($data));

        return response()->json(['message' => 'pesan berhasil di kirim']);
    }
}
