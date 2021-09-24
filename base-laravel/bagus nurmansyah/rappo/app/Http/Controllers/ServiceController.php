<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        return view('service.index');
    }

    public function fullOrder()
    {
        return view('service.full-order');
    }

    public function makloonSublime()
    {
    return view('service.makloon-sublime');
    }
}
