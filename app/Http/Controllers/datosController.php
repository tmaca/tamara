<?php

namespace App\Http\Controllers;


use App\modelUsu;
use Illuminate\Http\Request;


class datosController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function datosFormu()
    {
        return view('datosFormu');
    }
    public function datosFormu2(Request $request)
    {
        modelUsu::create($request->all());
        return view('datosFormu');
    }
}