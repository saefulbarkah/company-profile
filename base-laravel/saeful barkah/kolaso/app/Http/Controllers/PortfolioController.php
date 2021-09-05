<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function listPortfolio()
    {
        return view('admin.portfolio.list-portfolio');
    }

    public function create()
    {
        return view('admin.portfolio.add-portfolio');
    }

    public function listTag()
    {
        return view('admin.portfolio.list-tag');
    }
}
