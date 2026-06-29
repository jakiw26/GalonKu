<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function customer()
    {
        return view('customer.dashboard');
    }
    public function kurir()
    {
        return view('kurir.dashboard');
    }
}