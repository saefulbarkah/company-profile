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
}
