<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ([
            '3103119051',
            'Denis Rimbawan',
            'Laki-laki',
            '+62 88215189372',
            'XII RPL 2'
        ]);
    }
}