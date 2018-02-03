<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class JabatanController extends Controller
{
	public function index()
	{
		$client = new GuzzleHttpClient();

		$apiRequest = $client->request('GET','http://localhost:8080/api/jabatan',[
			]);
		$contentjabatan = json_decode($apiRequest->getBody()->getContents());
		// $content = ('content');

		return view ('jabatan.index',['contentjabatan'=> $contentjabatan]);

		// dd($content);
	}

	public function create()
	{
    	return view('jabatan.create');
	}

	public function store(Request $request)
	{
	   $client = new \GuzzleHttp\Client();

	   $input = $request->all();
	   unset($input['_token']);


	   //Post to server
	   $apiRequest = $client->request('POST','http://localhost:8080/api/jabatan',[
	   	'form_params' => [

	   	'jabatan' => $input['jabatan'],
	   	'jobdesk' => $input['jobdesk'],
	   	]
	   	]);
	   // return redirect ('post')->with('success', 'Post added !!');
	   return redirect()->route('jabatan.index')->with('success', 'Jabatan added !!');
		
	}

	public function edit($id)
	{
		$client = new GuzzleHttpClient();

	  	$response = $client->request('GET','http://localhost:8080/api/jabatan/'. $id);
	  	$contentjabatan = json_decode($response->getBody()->getContents());

	  	// dd($content);
	  	return view('jabatan.edit', ['contentjabatan' => $contentjabatan ]);	
	}

	public function update(Request $request, $id)
	{
		$client = new GuzzleHttpClient();
		$input = $request->all();
		$apiRequest = $client->request('PUT','http://localhost:8080/api/jabatan/'. $id ,[
			'form_params' => [
			'jabatan' => $input['jabatan'],
	   		'jobdesk' => $input['jobdesk'],
			]
			]);


		// dd($apiRequest);
		return redirect()->route('jabatan.index')->with('info', 'Jabatan edited !!');	
	}

	public function destroy ($id)
	{

		$client = new GuzzleHttpClient();
		$apiRequest = $client->request('DELETE','http://localhost:8080/api/jabatan/'. $id);

				
		return redirect()->route('jabatan.index')->with('danger', 'Jabatan deleted !!');
	}
}
