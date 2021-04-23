<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function idle(Request $request)
    {
    	$status = $request->s;
    	return view('pages.datas.table_idle')
    			->with('s', $status);
    }

    public function cari(Request $request)
    {
    	return view('pages.datas.table_cari')
    			->with('key', $request->key);
    }
}
