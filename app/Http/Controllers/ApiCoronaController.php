<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiCoronaController extends Controller
{
    public function index()
    {
    	// api bagus 
// https://covid19.mathdro.id/api
// https://indonesia-covid-19.mathdro.id/api
// https://indonesia-covid-19.mathdro.id/api/kasus
// https://indonesia-covid-19.mathdro.id/api/provinsi

    	// Seluruh Dunia
		$response = Http::withHeaders([
			    'x-rapidapi-host' => 'covid-19-coronavirus-statistics.p.rapidapi.com',
				'x-rapidapi-key' => '5454503a60msh847a7977acf6d60p1c0ae1jsn98b1d9437657'
			])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats');

		$dunia = $response['data']['covid19Stats'];

		// Indonesia
		$indonesia = Http::get('https://indonesia-covid-19.mathdro.id/api');

    	// return $response->body();

    	// Kasus Indonesia
    	$perKasus = Http::get('https://indonesia-covid-19.mathdro.id/api/kasus');
		$data = $perKasus['data']['nodes'];

		// Provinsi
		$provinsi = Http::get('https://indonesia-covid-19.mathdro.id/api/provinsi');
		$provinsi = $provinsi['data'];

		// Data Semua terkumpul
		$global = Http::get('https://covid19.mathdro.id/api');

    	return view('index', compact('indonesia','provinsi','global','data','dunia'));
    }

    public function all()
    {
    	$response = Http::withHeaders([
		    'x-rapidapi-host' => 'covid-19-coronavirus-statistics.p.rapidapi.com',
			'x-rapidapi-key' => '5454503a60msh847a7977acf6d60p1c0ae1jsn98b1d9437657'
		])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats');

		$data = $response['data']['covid19Stats'];
		return DataTables($data)->toJson();

    }

    public function perKasus()
    {
    	$kasus = Http::get('https://indonesia-covid-19.mathdro.id/api/kasus');
    	$data = $kasus['data']['nodes'];
    	return DataTables($data)->toJson();
    }

    public function provinsi()
    {
    	$provinsi = Http::get('https://indonesia-covid-19.mathdro.id/api/provinsi');
		$data = $provinsi['data'];
		return DataTables($data)->toJson();
    }


    // Buat Praktek
    public function global()
    {
		$response = Http::withHeaders([
		    'x-rapidapi-host' => 'covid-19-coronavirus-statistics.p.rapidapi.com',
			'x-rapidapi-key' => '5454503a60msh847a7977acf6d60p1c0ae1jsn98b1d9437657'
		])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats');

		$data = $response['data']['covid19Stats'];

    	return view('positif', compact('data'));
    }

    public function instagram()
    {
    	$response = Http::get('https://api.instagram.com/v1/users/self?access_token=2281179065.e0a9507.0a0fd484763f45d29ce32f07c27c35b7');
    	$username = $response['data']['username'];
    	$foto = $response['data']['profile_picture'];
    	$nama_lengkap = $response['data']['full_name'];
    	$bio = $response['data']['bio'];
    	$website = $response['data']['website'];
    	$count =  $response['data']['counts'];

    	$gambar = Http::get('https://api.instagram.com/v1/users/self/media/recent/?access_token=2281179065.e0a9507.0a0fd484763f45d29ce32f07c27c35b7&count=10');
    	$photos = [];
		foreach ($gambar['data'] as $photo) {
		  $photos[] = $photo['images']['thumbnail']['url'];
		}

    	return view('instagram', compact('username','foto','nama_lengkap','bio','website','count','photos'));
    }


    public function tutorial()
    {
    	return view('positif');
    }
}
