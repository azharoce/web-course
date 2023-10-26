<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.index', [
            'user' => 'dadas'
        ]);
    }
    public function users()
    {
        return view('users.user', [
            'user' => 'dadas'
        ]);
    }
}
