<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Info;

class InfoController extends Controller
{
    public function info(Info $Info)
    {
    	return view('user.info',compact('Info'));
    }
}