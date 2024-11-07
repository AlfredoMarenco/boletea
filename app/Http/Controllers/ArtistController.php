<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function show()
    {
        // Información del artista para la vista (esto se puede obtener de una base de datos)
        $artistData = [
            'name' => 'Nombre del Artista o Grupo',
            'socials' => [
                'twitter' => 'https://twitter.com/artist',
                'instagram' => 'https://instagram.com/artist',
                'youtube' => 'https://youtube.com/artist',
            ],
            'merchantLink' => 'https://artistshop.com',
            'upcomingEvents' => [
                ['date' => '2024-12-05', 'location' => 'Ciudad 1, País'],
                ['date' => '2024-12-12', 'location' => 'Ciudad 2, País'],
            ],
        ];

        return view('artist.show', compact('artistData'));
    }
}