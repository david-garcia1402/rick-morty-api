<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RickAndMortyService
{
    protected $baseUrl = 'https://rickandmortyapi.com/api';

    public function getCharacters()
    {
        try {
            dd('oi');
            $response = Http::get("{$this->baseUrl}/character");
            return $response->successful() ? $response->json() : ['error' => 'Erro ao buscar personagens'];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getCharacterById($id)
    {
        try {
            dd('oi');
            $response = Http::get("{$this->baseUrl}/character/{$id}");
            return $response->successful() ? $response->json() : ['error' => 'Personagem não encontrado'];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
