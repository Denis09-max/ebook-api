<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119037,
            "Nama" => "Denis Rimbawan",
            "Gender" => "Laki-laki",
            "Phone" => 6288215189372,
            "Kelas" => "XII RPL 2"
        ];

    }

}