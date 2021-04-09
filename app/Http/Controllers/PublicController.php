<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function cekkode(Request $request)
    {
    	return view('pages.public_cek');
    }

    public function peta(Request $request)
    {
    	return view('pages.public_peta');
    }
}
