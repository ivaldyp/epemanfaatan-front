<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function aset(Request $request)
    {
    	$status = $request->s;

        if ($request->kib != 'all') {
            $kibnow = '&kib='.$request->k;
        } else {
            $kibnow = '';
        }
        $kib = $request->k;

        if ($status == "siap") {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://aset.jakarta.go.id/ws/pemanfaatan.aspx?u=bpadws&p=!@bpad_dki@!&tipe=asetkerjasama'.$kibnow);
            $datamap = json_decode($response->getBody());
        } elseif ($status == "proses") {
            
        } elseif ($status == "all") {

        }

    	return view('pages.datas.table_aset')
    			->with('s', $status)
                ->with('k', $kib)
                ->with('datamap', $datamap->hasil);
    }

    public function cari(Request $request)
    {
    	return view('pages.datas.table_cari')
    			->with('key', $request->key);
    }
}
