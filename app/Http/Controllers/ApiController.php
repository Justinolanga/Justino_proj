<?php

// app/Http/Controllers/ApiController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getUsers()
    {
        $client = new Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/users');
        $users = json_decode($response->getBody(), true);

        return view('api.index', compact('users'));
    }

    public function getPosts()
    {
        $client = new Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/posts');
        $posts = json_decode($response->getBody(), true);

        return view('api.index', compact('posts'));
    }

    public function getComments()
    {
        $client = new Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/comments');
        $comments = json_decode($response->getBody(), true);

        return view('api.index', compact('comments'));
    }

    public function getTodos()
    {
        $client = new Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/todos');
        $todos = json_decode($response->getBody(), true);

        return view('api.index', compact('todos'));
    }

    public function getAlbums()
    {
        $client = new Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/albums');
        $albums = json_decode($response->getBody(), true);

        return view('api.index', compact('albums'));
    }

    public function getPhotos()
    {
        $client = new Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/photos');
        $photos = json_decode($response->getBody(), true);

        return view('api.index', compact('photos'));
    }
}

