<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) { //Verificamos que la peticion sea ajax cuando se hace una petion get vue
            return response()->json([
                ['id' => 1, 'name' => 'Pikachu'],
                ['id' => 2, 'name' => 'Squirtle'],
                ['id' => 3, 'name' => 'Charizard'],
            ]);
        }
        return view('pokemons.index');
    }


    public function store(Request $request){ //Creacion de un pokemon
        if ($request->ajax()) { //Como vue envia peticiones ajax evalidamos si nos llega un ajax
            $pokemon = new Pokemon();
            $pokemon->name = $request->input('name');
            $pokemon->picture = $request->input('picture');
            $pokemon->save();

            return response()->json(
                ['message' => 'Pokemon creado correctamente'], 200
            );
        }
    }
}
