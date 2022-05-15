<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi.registrasi', [
            'title' => 'Registrasi',
            'active' => 'registrasi'
        ]);
    }
}
