<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Rekanan_data;

class PublicController extends Controller
{
    public function cekkode(Request $request)
    {
    	$kode = $request->kode;
    	return view('pages.public_cek')
    			->with('kode', $kode);
    }

    public function tampilkode(Request $request)
    {
        $query = Rekanan_data::
                    where('id_rekanan', $request->kode)
                    ->where('sts', 1)
                    ->first();

        if (!($query)) {
            return redirect('/cekkode')->with('message', 'Kode mitra tidak ditemukan');
        }

        return view('pages.public_tampil')
                ->with('query', $query);
    }

    public function peta(Request $request)
    {
    	return view('pages.public_peta');
    }

    public function petacari(Request $request)
    {
        $lat = $request->lat;
        $lon = $request->lon;
        return view('pages.public_petacari')
                ->with('lat', $lat)
                ->with('lon', $lon);
    }    
}
