<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokemonsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://pokeapi.co/api/v2/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', 'pokemon');
        $pokemons = json_decode($response->getBody()->getContents());

        return view('pokemons.index', compact('pokemons'));
    }
}
