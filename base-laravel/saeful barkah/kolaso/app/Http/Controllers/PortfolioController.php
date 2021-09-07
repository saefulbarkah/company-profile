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

    public function listPortfolio()
    {
        $portfolio = Portfolio::join('items', 'portfolios.item_id', '=', 'items.id')
            ->select('portfolios.*', 'items.name as item')
            ->get();
        return view('admin.portfolio.list-portfolio', compact('portfolio'));
    }

    public function createPortfolio()
    {
        $item = Item::all();
        return view('admin.portfolio.add-portofolio', compact('item'));
    }

    public function portfolioPost(Request $request)
    {
        $pesan = [
            'required' => 'Form input tidak boleh kosong',
            'mimes'    => 'Format gambar salah',
        ];
        $validator = Validator::make($request->all(), [
            'image' => 'mimes:png,jpg|required',
            'name' => 'required',
            'item_id' => 'required',
        ], $pesan);

        if ($validator->fails()) {
            return back()->with('warning', $validator->messages()->all()[0])->withInput();
        }

        $create = new Portfolio();
        $create->name = $request->name;
        $create->item_id = $request->item_id;

        // upload image
        $imageName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $create->image = $imageName;
        $create->save();
        return redirect('admin/portofolio')->with('success', 'Data Berhasil di tambahkan');
    }

    public function editportfolio($id)
    {
        $item = Item::all();
        $portfolio = Portfolio::find($id);
        return view('admin.portfolio.edit-portfolio', compact('portfolio', 'item'));
    }

    public function portfolioUpdate(Request $request, $id)
    {
        $pesan = [
            'required' => 'Form input tidak boleh kosong',
            'mimes'    => 'Format gambar salah',
        ];
        $validator = Validator::make($request->all(), [
            'image' => 'mimes:png,jpg|required',
            'name' => 'required',
            'item_id' => 'required',
        ], $pesan);

        if ($validator->fails()) {
            return back()->with('warning', $validator->messages()->all()[0])->withInput();
        }

        $update = Portfolio::find($id);
        $update->name = $request->name;
        $update->item_id = $request->item_id;

        // upload image
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $update->image = $imageName;
        }
        $update->update();
        return redirect('admin/portofolio')->with('success', 'Data Berhasil di update');
    }

    public function portfolioDestroy($id)
    {
        $portfolio = Portfolio::find($id);
        File::delete('images/' . $portfolio->image);
        Portfolio::where('id', $id)->delete();
        return redirect('admin/portofolio')->with('success', 'Data Berhasil di hapus');
    }

    public function listItemPortfolio()
    {
        $data = Item::all();
        return view('admin.portfolio.list-tag', compact('data'));
    }

    public function listItemPost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required'
        ]);
        $create = new Item();
        $create->name = $request->name;
        $create->save();
        return redirect()->back();
    }
}
