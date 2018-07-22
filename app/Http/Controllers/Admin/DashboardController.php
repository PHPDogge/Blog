<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //DashBoard
    public function dashboard() {
        return view('admin.dashboard');
    }
}
