<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SamacharController extends Controller
{
    public function index()
    {
        return view('samachar');
    }
}
