<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function getDashboard()
    {
        return view('pages/index');
    }
}