<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'thanks');

    }
    public function index()
    {
        return view('index');
    }

    public function admin()
    {
        return view('admin.layouts.app');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
