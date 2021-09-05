<?php

namespace App\Http\Controllers;

use App\PortfolioTag;
use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function listPortfolio()
    {
        $porfolio = Portfolio::all();
        $tag = PortfolioTag::all();
        return view('admin.portfolio.list-portfolio', compact('tag'));
    }

    public function portfolioPost(Request $request)
    {
        dd($request->all());
    }

    public function listTagPortfolio()
    {
        $data = PortfolioTag::all();
        return view('admin.portfolio.list-tag', compact('data'));
    }

    public function listTagPost(Request $request)
    {
        // dd($request->all());
        $create = new PortfolioTag();
        $create->name = $request->name;
        $create->save();

        return redirect()->back();
    }
}
