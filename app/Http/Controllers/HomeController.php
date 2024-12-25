<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminDash()
    {
        return view('Admin_dashboard');
    }
    
    public function editorDash()
    {
        return view('Editor_dashboard');
    }

    public function index()
    {
        return view('welcome');
    }
}
