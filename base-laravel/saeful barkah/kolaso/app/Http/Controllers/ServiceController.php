<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        return view('pages.service');
    }
    public function serviceFullOrder()
    {
        return view('pages.fulll-order');
    }

    public function serviceMakloonSublim()
    {
        return view('pages.makloon-sublim');
    }
}
