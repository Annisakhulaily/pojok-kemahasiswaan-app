<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('tim.dashboard');
    }
}
