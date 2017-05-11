<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
       
        return view('profile.index' , ['profiles' => $profiles]);
    }
}
