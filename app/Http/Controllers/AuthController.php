<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return[
            "NISN" => 3103119037,
            "Nama" => "Denis Rimbawan",
            "Gender" => "Laki-laki",
            "Phone" => 62812345678,
            "Kelas" => "XII RPL 2"
        ];
    }
}
