<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class JoinController extends Controller
{
	public function index()
	{
		$client = new GuzzleHttpClient();

		$apiRequest = $client->request('GET','http://localhost:8080/api/pegawai',[
			]);
		$contentjoin = json_decode($apiRequest->getBody()->getContents());
		// $content = ('content');
		
		return view ('join.index',['contentjoin'=> $contentjoin]);

		// dd($content);
	}

}