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
        // $query = Rekanan_data::
        //             where('id_rekanan', $request->kode)
        //             ->where('sts', 1)
        //             ->first();

        // if (!($query)) {
        //     return redirect('/cekkode')->with('message', 'Kode mitra tidak ditemukan');
        // }

        $kode = str_replace('.', '', $request->kode);
        $kode = str_replace('-', '', $kode);
        
        $client = new \GuzzleHttp\Client();

        // $client2 = new \GuzzleHttp\Client();
        $resphistory = $client->request('GET', 'https://aset.jakarta.go.id/ws/pemanfaatan.aspx?u=bpadws&p=!@bpad_dki@!&tipe=history&npwp='.$kode);
        $datahistory = json_decode($resphistory->getBody())->hasil;
        $respprogress = $client->request('GET', 'https://aset.jakarta.go.id/ws/pemanfaatan.aspx?u=bpadws&p=!@bpad_dki@!&tipe=progress&npwp='.$kode);
        $dataprogress = json_decode($respprogress->getBody())->hasil;

        if (isset($datahistory[0]->nm_rekanan)) {
            $nm_rekanan = $datahistory[0]->nm_rekanan;
        } else {
            $nm_rekanan = '';
        }

        return view('pages.public_tampil')
                ->with('nm_rekanan', $nm_rekanan)
                ->with('npwp', $request->kode)
                ->with('datahistory', $datahistory)
                ->with('dataprogress', $dataprogress);
    }

    public function peta(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://aset.jakarta.go.id/ws/pemanfaatan.aspx?u=bpadws&p=!@bpad_dki@!&tipe=asetkerjasama');
        $datamap = json_decode($response->getBody());

    	return view('pages.public_peta')
                ->with('datamap', $datamap);
    }

    public function petacari(Request $request)
    {
        $lat = $request->lat;
        $lon = $request->lon;
        $alamat = $request->alamat;
        $nabar = $request->nabar;
        $kobar = $request->kobar;
        return view('pages.public_petacari')
                ->with('lat', $lat)
                ->with('lon', $lon)
                ->with('nabar', $nabar)
                ->with('kobar', $kobar)
                ->with('alamat', $alamat);
    }    
}
