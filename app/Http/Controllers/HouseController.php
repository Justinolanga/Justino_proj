<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HouseController extends Controller
{
    public function fetchPosts()
    {
        $url = 'https://jsonplaceholder.typicode.com/posts'; // Endpoint da API

        // Fazendo a requisição à API
        $response = Http::get($url);

        if ($response->ok()) {
            $posts = $response->json(); // Obtém os dados como array
            return view('dashboard', ['posts' => $posts]); // Envia para a view
        } else {
            return view('dashboard', ['error' => 'Não foi possível carregar os posts.']);
        }
    }
}
