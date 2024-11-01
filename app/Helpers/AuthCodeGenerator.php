<?php

namespace App\Helpers;

class AuthCodeGenerator
{

    public static function generateAuthCode()
    {
        // Generate angka acak antara 0 dan 999999
        $randomInteger = random_int(0, 999999);

        // Format angka dengan menambahkan angka 0 di depan jika diperlukan
        $authCode = str_pad($randomInteger, 6, '0', STR_PAD_LEFT);

        return $authCode;
    }
}
