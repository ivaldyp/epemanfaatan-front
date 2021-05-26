<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
	public function index(Request $request)
	{
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', 'https://aset.jakarta.go.id/ws/pemanfaatan.aspx?u=bpadws&p=!@bpad_dki@!&tipe=asetkerjasama');
		$datamap = json_decode($response->getBody())->hasil;
		$totalasd = count((array)$datamap);

		$respstat = $client->request('GET', 'https://aset.jakarta.go.id/ws/pemanfaatan.aspx?u=bpadws&p=!@bpad_dki@!&tipe=statistik');
		$datastat = json_decode($respstat->getBody())->hasil;

		// dd($datastat);
		// die();

		return view('index')
				->with('totalasd', $totalasd)
				->with('datastat', $datastat[0])
				;
	}
}
