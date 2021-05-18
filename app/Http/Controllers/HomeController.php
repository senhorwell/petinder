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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function perfil()
    {
        return view('perfil');
    }
    public function perfil2()
    {
        return view('perfil2');
    }
    public function mensagem()
    {
        return view('mensagem');
    }
    public function adocao()
    {
        return view('adocao');
    }
}
