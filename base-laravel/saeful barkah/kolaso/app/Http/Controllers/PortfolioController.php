<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Portfolio;
use File;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view('pages.portfolio');
    }
}
