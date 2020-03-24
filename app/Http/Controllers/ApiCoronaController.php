<?php

namespace App\Http\Controllers;

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

    	return view('index', compact('indonesia','provinsi','global','data'));
    }

    public function global()
    {
		$response = Http::get('api.kawalcorona.com');

		$data = $response['attributes'];
		return $data;
    	return view('positif', compact('data'));
    }
}
