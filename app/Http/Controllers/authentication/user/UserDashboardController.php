<?php

namespace App\Http\Controllers\authentication\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard() {
        return view('authentication.user.user-dashboard');
    }
}
