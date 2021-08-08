<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
