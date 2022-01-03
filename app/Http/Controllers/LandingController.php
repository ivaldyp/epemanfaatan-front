<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pem_carousel;

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

		$imgs = Pem_carousel::
				where('sts', 1)
				->where('appr', 1)
				->orderBy('urut', 'asc')
				->get();

		return view('index')
				->with('totalasd', $totalasd)
				->with('datastat', $datastat[0])
				->with('imgs', $imgs)
				;
	}
}
