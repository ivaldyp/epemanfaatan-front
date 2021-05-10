<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
	public function index(Request $request)
	{
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', 'https://aset.jakarta.go.id/ws/pemanfaatan.aspx?u=bpadws&p=!@bpad_dki@!&tipe=asetkerjasama&kib=A');
		$datamap = json_decode($response->getBody())->hasil;
		$totalasd = count((array)$datamap);

		// var_dump(count((array)$datamap)) ;
		// die();

		return view('index')
				->with('totalasd', $totalasd);
	}
}
