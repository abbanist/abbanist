<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setup;

class FrontsetupController extends Controller
{
    public function setup(Setup $Setup)
    {
        // return view('layouts.frontLayout.front_design',compact('Setup'));

        return view('layouts.frontLayout.front_footer',compact('Setup'));
     
    }
}