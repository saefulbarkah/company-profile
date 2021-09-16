<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class ProfileController extends Controller
{
    public function profile()
    {
        $profile = Profile::first();
        return view('admin.profile', compact('profile'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $pesan = [
            'required' => 'Form input tidak boleh kosong',
            'email'    => 'Format email salah',
            'numeric'  => 'No telp wajib formatnya angka',
        ];
        $validator = Validator::make($request->all(), [
            'title_web' => 'required',
            'email' => 'email',
            'phone_number' => 'numeric',
        ], $pesan);

        if ($validator->fails()) {
            return back()->with('warning', $validator->messages()->all()[0])->withInput();
        }
        $update = Profile::find($id);
        $update->title_web = $request->title_web;
        $update->email = $request->email;
        $update->phone_number = $request->phone_number;
        $update->address = $request->address;
        $update->update();
        return redirect('admin/profile')->with('success', 'Data Berhasil di update');
    }
}
