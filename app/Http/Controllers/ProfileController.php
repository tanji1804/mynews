<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profiles = Profile::all();
        
        return view('profile.index', ['profiles' => $profiles]);
    }
}
