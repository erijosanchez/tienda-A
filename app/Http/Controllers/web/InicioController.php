<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio() {
        return view('web.inicio');
    }

    public function shop() {
        return view('web.shop');
    }
}
