<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// admin controller
class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
