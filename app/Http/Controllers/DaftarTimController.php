<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use App\Models\DaftarTimModel;

class DaftarTimController extends Controller
{
    public function __construct()
    {
        $this->DaftarTimModel = new DaftarTimModel();
    }

    public function index()
    {
        $data = [
            'tim' => $this->DaftarTimModel->allData(),
        ];
        return view('tim.daftartimpkm.daftartimpkm', $data);
    }
}
