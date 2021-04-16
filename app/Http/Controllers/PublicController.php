<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Rekanan_data;

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
