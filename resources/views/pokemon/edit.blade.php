@extends('auth.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Pokemon</div>
                    @if (session('success'))
                        <div class="alert alert-success" id="success-alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" id="error-alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('pokemon.update', $pokemon->pokemons_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="poke_name">Nombre</label>
                                <input type="text" class="form-control" id="poke_name" name="poke_name"
                                    value="{{ $pokemon->poke_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Tipo</label>
                                <select class="form-control" id="type" name="type" required>
                                    <option value="Normal" {{ $pokemon->type == 'Normal' ? 'selected' : '' }}>Normal
                                    </option>
                                    <option value="Fire" {{ $pokemon->type == 'Fire' ? 'selected' : '' }}>Fire</option>
                                    <option value="Water" {{ $pokemon->type == 'Water' ? 'selected' : '' }}>Water</option>
                                    <option value="Electric" {{ $pokemon->type == 'Electric' ? 'selected' : '' }}>Electric
                                    </option>
                                    <option value="Grass" {{ $pokemon->type == 'Grass' ? 'selected' : '' }}>Grass</option>
                                    <option value="Ice" {{ $pokemon->type == 'Ice' ? 'selected' : '' }}>Ice</option>
                                    <option value="Fighting" {{ $pokemon->type == 'Fighting' ? 'selected' : '' }}>Fighting
                                    </option>
                                    <option value="Poison" {{ $pokemon->type == 'Poison' ? 'selected' : '' }}>Poison
                                    </option>
                                    <option value="Ground" {{ $pokemon->type == 'Ground' ? 'selected' : '' }}>Ground
                                    </option>
                                    <option value="Flying" {{ $pokemon->type == 'Flying' ? 'selected' : '' }}>Flying
                                    </option>
                                    <option value="Psychic" {{ $pokemon->type == 'Psychic' ? 'selected' : '' }}>Psychic
                                    </option>
                                    <option value="Bug" {{ $pokemon->type == 'Bug' ? 'selected' : '' }}>Bug</option>
                                    <option value="Rock" {{ $pokemon->type == 'Rock' ? 'selected' : '' }}>Rock</option>
                                    <option value="Ghost" {{ $pokemon->type == 'Ghost' ? 'selected' : '' }}>Ghost</option>
                                    <option value="Dark" {{ $pokemon->type == 'Dark' ? 'selected' : '' }}>Dark</option>
                                    <option value="Steele" {{ $pokemon->type == 'Steele' ? 'selected' : '' }}>Steele
                                    </option>
                                    <option value="Fairy" {{ $pokemon->type == 'Fairy' ? 'selected' : '' }}>Fairy</option>
                                    <option value="Dragon" {{ $pokemon->type == 'Dragon' ? 'selected' : '' }}>Dragon
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subtype">Subtipo</label>
                                <select class="form-control" id="subtype" name="subtype" required>
                                    <option value="Normal" {{ $pokemon->type == 'Normal' ? 'selected' : '' }}>Normal
                                    </option>
                                    <option value="Fire" {{ $pokemon->type == 'Fire' ? 'selected' : '' }}>Fire</option>
                                    <option value="Water" {{ $pokemon->type == 'Water' ? 'selected' : '' }}>Water</option>
                                    <option value="Electric" {{ $pokemon->type == 'Electric' ? 'selected' : '' }}>Electric
                                    </option>
                                    <option value="Grass" {{ $pokemon->type == 'Grass' ? 'selected' : '' }}>Grass</option>
                                    <option value="Ice" {{ $pokemon->type == 'Ice' ? 'selected' : '' }}>Ice</option>
                                    <option value="Fighting" {{ $pokemon->type == 'Fighting' ? 'selected' : '' }}>Fighting
                                    </option>
                                    <option value="Poison" {{ $pokemon->type == 'Poison' ? 'selected' : '' }}>Poison
                                    </option>
                                    <option value="Ground" {{ $pokemon->type == 'Ground' ? 'selected' : '' }}>Ground
                                    </option>
                                    <option value="Flying" {{ $pokemon->type == 'Flying' ? 'selected' : '' }}>Flying
                                    </option>
                                    <option value="Psychic" {{ $pokemon->type == 'Psychic' ? 'selected' : '' }}>Psychic
                                    </option>
                                    <option value="Bug" {{ $pokemon->type == 'Bug' ? 'selected' : '' }}>Bug</option>
                                    <option value="Rock" {{ $pokemon->type == 'Rock' ? 'selected' : '' }}>Rock</option>
                                    <option value="Ghost" {{ $pokemon->type == 'Ghost' ? 'selected' : '' }}>Ghost</option>
                                    <option value="Dark" {{ $pokemon->type == 'Dark' ? 'selected' : '' }}>Dark</option>
                                    <option value="Steele" {{ $pokemon->type == 'Steele' ? 'selected' : '' }}>Steele
                                    </option>
                                    <option value="Fairy" {{ $pokemon->type == 'Fairy' ? 'selected' : '' }}>Fairy</option>
                                    <option value="Dragon" {{ $pokemon->type == 'Dragon' ? 'selected' : '' }}>Dragon
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="region">Región</label>
                                <select class="form-control" id="region" name="region" required>
                                    <option value="Kanto" {{ $pokemon->region == 'Kanto' ? 'selected' : '' }}>Kanto
                                    </option>
                                    <option value="Johto" {{ $pokemon->region == 'Johto' ? 'selected' : '' }}>Johto
                                    </option>
                                    <option value="Sinnoh" {{ $pokemon->region == 'Sinnoh' ? 'selected' : '' }}>Sinnoh
                                    </option>
                                    <option value="Hisui" {{ $pokemon->region == 'Hisui' ? 'selected' : '' }}>Hisui
                                    </option>
                                    <option value="Paldea" {{ $pokemon->region == 'Paldea' ? 'selected' : '' }}>Paldea
                                    </option>
                                    <option value="Hoenn" {{ $pokemon->region == 'Hoenn' ? 'selected' : '' }}>Hoenn
                                    </option>
                                    <option value="Unova" {{ $pokemon->region == 'Unova' ? 'selected' : '' }}>Unova
                                    </option>
                                    <option value="Kalos" {{ $pokemon->region == 'Kalos' ? 'selected' : '' }}>Kalos
                                    </option>
                                    <option value="Alola" {{ $pokemon->region == 'Alola' ? 'selected' : '' }}>Alola
                                    </option>
                                    <option value="Galar" {{ $pokemon->region == 'Galar' ? 'selected' : '' }}>Galar
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
