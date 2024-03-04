<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard');
    }

    public function topupsaldo()
    {
        return view('dashboard.topup');
    }

    public function tunnelremote()
    {
        return view('dashboard.tunnelremote');
    }
}
