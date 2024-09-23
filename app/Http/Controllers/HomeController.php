<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Hanya halaman dashboard yang memerlukan autentikasi
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Halaman beranda yang dapat diakses tanpa login
        return view('home');
    }
}
