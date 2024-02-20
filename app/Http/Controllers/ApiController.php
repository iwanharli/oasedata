<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use TCG\Voyager\Models\Post;

class ApiController extends Controller
{
    public function postNews(Request $request)
    {
        $postData = $request->input('news');

        // Make API request
        $apiKey = 'd1f897d947324f068121fcf8c961502f';
        $apiUrl = 'http://api.voicerss.org/';

        $response = Http::post($apiUrl, [
            'key' => $apiKey,
            'hl' => 'id-id',
            'src' => $postData,
        ]);

        $apiResponse = $response->json();

        // Return a response
        return response()->json($apiResponse);
    }
}
