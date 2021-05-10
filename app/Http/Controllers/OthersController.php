<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OthersController extends Controller
{
    public function faq(Request $request)
    {
    	return view('pages.public_faq');
    }

    public function peraturan(Request $request)
    {
    	return view('pages.public_peraturan');
    }
}
