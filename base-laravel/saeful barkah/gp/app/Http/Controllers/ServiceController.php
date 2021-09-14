<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services()
    {
        return view('pages.service');
    }

    public function fullOrder()
    {
        return view('pages.full-order');
    }
}
