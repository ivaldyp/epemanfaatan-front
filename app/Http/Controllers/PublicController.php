<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function cekkode(Request $request)
    {
    	$kode = $request->kode;
    	return view('pages.public_cek')
    			->with('kode', $kode);
    }

    public function peta(Request $request)
    {
    	return view('pages.public_peta');
    }
}
