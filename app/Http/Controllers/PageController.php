<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function kuce()
    {
        return view('kuce');
    }
    public function rente()
    {
        return view('rente');
    }
}
