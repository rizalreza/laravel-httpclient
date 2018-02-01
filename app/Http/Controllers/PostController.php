<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class PostController extends Controller
{
	public function index()
	{
		$client = new GuzzleHttpClient();

		$apiRequest = $client->request('GET','http://localhost:8080/api/pegawai',[
			]);
		$content = json_decode($apiRequest->getBody()->getContents());
		// $content = ('content');

		return view ('post.index',['content'=> $content]);

		// dd($content);
	}

	public function create()
	{
    	return view('post.create');
	}

	public function store(Request $request)
	{
	   $client = new \GuzzleHttp\Client();

	   $input = $request->all();
	   unset($input['_token']);


	   //Post to server
	   $apiRequest = $client->request('POST','http://localhost:8080/api/pegawai',[
	   	'form_params' => [

	   	'nama' => $input['nama'],
	   	'nip' => $input['nip'],
	   	'alamat' => $input['alamat'],
	   	'hp' => $input['hp'],
	   	'email' => $input['email']
	   	]
	   	]);
	   // return redirect ('post')->with('success', 'Post added !!');
	   return redirect()->route('post.index')->with('success', 'Post added !!');
		
	}

	public function edit($id)
	{
		$client = new GuzzleHttpClient();

	  	$response = $client->request('GET','http://localhost:8080/api/pegawai/'. $id);
	  	$content = json_decode($response->getBody()->getContents());

	  	// dd($content);
	  	return view('post.edit', ['content' => $content ]);	
	}

	public function update(Request $request, $id)
	{
		$client = new GuzzleHttpClient();
		$input = $request->all();
		$apiRequest = $client->request('PUT','http://localhost:8080/api/pegawai/'. $id ,[
			'form_params' => [
			'nama' => $input['nama'],
			'nip' => $input['nip'],
			'alamat' => $input['alamat'],
			'hp' => $input['hp'],
			'email' => $input['email']
			]
			]);

		return redirect()->route('post.index')->with('info', 'Post edited !!');	
	}

	public function destroy ($id)
	{

		$client = new GuzzleHttpClient();
		$apiRequest = $client->request('DELETE','http://localhost:8080/api/pegawai/'. $id);

				
		return redirect()->route('post.index')->with('danger', 'Post deleted !!');
	}
}
