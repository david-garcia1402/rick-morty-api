<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RickAndMortyController extends Controller
{
    protected $baseUrl = 'https://rickandmortyapi.com/api';

    public function index()
    {
        try {
            $response = Http::get("{$this->baseUrl}/character");

            if ($response->successful()) {
                $data = json_decode($response->body(), true);

                return view('rickAndMorty.index', ['data' => $data]);
            }

            return response()->json(['error' => 'Erro ao buscar personagens'], $response->status());
        } catch (\Exception $e) {
            Log::error('Erro ao buscar personagens: ' . $e->getMessage());
            return response()->json(['error' => 'Erro interno no servidor'], 500);
        }
    }

    public function search($id)
    {
        try {
            $response = Http::get("{$this->baseUrl}/character/" . $id);
            if ($response->successful()) {
                $data = json_decode($response->body()); 
                $character = [
                    'results' => $data
                ];
                return view('rickAndMorty.index', ['data' => $character]);
            }
        } catch (\Exception $e) {
            Log::error('Erro ao buscar personagens: ' . $e->getMessage());
            return response()->json(['error' => 'Erro interno no servidor'], 500);
        }
    }
}
