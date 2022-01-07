<?php

namespace App\Http\Controllers\authentication\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard() {
        return view('authentication.admin.admin-dashboard');
    }
}
