<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // Tambahkan ini untuk menggunakan Request
use Illuminate\Support\Facades\Auth; // Pastikan ini untuk menggunakan Auth

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Controller ini menangani otentikasi pengguna untuk aplikasi dan
    | mengarahkan mereka ke halaman utama. Controller ini menggunakan trait
    | untuk menyediakan fungsionalitasnya ke aplikasi kamu.
    |
    */

    use AuthenticatesUsers;

    /**
     * Tempat untuk mengarahkan pengguna setelah login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Fungsi logout untuk mengarahkan ke halaman home setelah logout.
     */
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/home');
    }

    /**
     * Buat instance controller baru.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
