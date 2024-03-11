<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->only([
            'create', 'store', 'edit', 'update', 'destroy', 'index'
        ]);
    }

    // Método para listar todos los Pokemon
    public function listAll()
    {
        $pokemons = Pokemon::all();
        return view('welcome', compact('pokemons'));
    }

    // Método para listar todos los Pokemon de un usuario
    public function index()
    {
        $pokemons = Pokemon::where('user_id', auth()->id())->get();
        return view('pokemon.index', compact('pokemons'));
    }


    // Método para mostrar el formulario de creación de un nuevo Pokemon
    public function create()
    {
        return view('pokemon.create');
    }

    // Método para guardar un nuevo Pokemon
    public function store(Request $request)
    {
        // Validar los datos del formulario
        try {
            $validatedData = $request->validate([
                'poke_name' => 'required|string|max:255',
                'type' => 'required|string|in:Normal,Fire,Water,Electric,Grass,Ice,Fighting,Poison,Ground,Flying,Psychic,Bug,Rock,Ghost,Dark,Steele,Fairy,Dragon',
                'subtype' => 'required|string|in:Normal,Fire,Water,Electric,Grass,Ice,Fighting,Poison,Ground,Flying,Psychic,Bug,Rock,Ghost,Dark,Steele,Fairy,Dragon',
                'region' => 'required|string|in:Kanto,Johto,Sinnoh,Hisui,Paldea,Hoenn,Unova,Kalos,Alola,Galar',
            ]);

            // Crear un nuevo Pokemon
            $pokemon = new Pokemon($validatedData + ['user_id' => auth()->id()]);

            // Guardar el Pokemon en la base de datos
            $pokemon->save();

            // Redirigir al usuario a la página de listado de Pokemon con un mensaje de éxito
            return $this->redirectWithMessage('pokemon.index', 'Pokemon creado exitosamente.');
        } catch (\Exception $e) {
            return $this->redirectWithMessage('pokemon.index', null, 'Ocurrió un error al crear el Pokemon.');
        }
    }

    // Método para mostrar un Pokemon específico
    public function show(Pokemon $pokemon)
    {
        return view('pokemon.show', compact('pokemon'));
    }

    // Método para mostrar el formulario de edición de un Pokemon
    public function edit(Pokemon $pokemon)
    {
        return view('pokemon.edit', compact('pokemon'));
    }

    // Método para actualizar un Pokemon
    public function update(Request $request, Pokemon $pokemon)
    {
        // Validar los datos del formulario
        try {
            $validatedData = $request->validate([
                'poke_name' => 'required|string|max:255',
                'type' => 'required|string|in:Normal,Fire,Water,Electric,Grass,Ice,Fighting,Poison,Ground,Flying,Psychic,Bug,Rock,Ghost,Dark,Steele,Fairy,Dragon',
                'subtype' => 'required|string|in:Normal,Fire,Water,Electric,Grass,Ice,Fighting,Poison,Ground,Flying,Psychic,Bug,Rock,Ghost,Dark,Steele,Fairy,Dragon',
                'region' => 'required|string|in:Kanto,Johto,Sinnoh,Hisui,Paldea,Hoenn,Unova,Kalos,Alola,Galar',
            ]);

            // Actualizar el Pokemon
            $pokemon->update($validatedData);

            return $this->redirectWithMessage('pokemon.index', 'Pokemon actualizado exitosamente.');
        } catch (\Exception $e) {
            return $this->redirectWithMessage('pokemon.index', null, 'Ocurrió un error al actualizar el Pokemon.');
        }
    }


    // Método para eliminar un Pokemon
    public function destroy(Pokemon $pokemon)
    {
        try {
            $pokemon->delete();
            return $this->redirectWithMessage('pokemon.index', 'Pokemon eliminado exitosamente.');
        } catch (\Exception $e) {
            return $this->redirectWithMessage('pokemon.index', null, 'Ocurrió un error al intentar eliminar el Pokemon.');
        }
    }

    protected function redirectWithMessage($route, $successMessage = null, $errorMessage = null)
    {
        if ($successMessage) {
            return redirect()->route($route)->with('success', $successMessage);
        } elseif ($errorMessage) {
            return redirect()->route($route)->with('error', $errorMessage);
        }

        return redirect()->route($route);
    }
}
