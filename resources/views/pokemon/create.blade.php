@extends('auth.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear nuevo Pokemon</div>
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
                        <form action="{{ route('pokemon.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="poke_name">Nombre</label>
                                <input type="text" class="form-control" id="poke_name" name="poke_name" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Tipo</label>
                                <select class="form-control" id="type" name="type" required>
                                    <option value="Normal">Normal</option>
                                    <option value="Fire">Fire</option>
                                    <option value="Water">Water</option>
                                    <option value="Electric">Electric</option>
                                    <option value="Grass">Grass</option>
                                    <option value="Ice">Ice</option>
                                    <option value="Fighting">Fighting</option>
                                    <option value="Poison">Poison</option>
                                    <option value="Ground">Ground</option>
                                    <option value="Flying">Flying</option>
                                    <option value="Psychic">Psychic</option>
                                    <option value="Bug">Bug</option>
                                    <option value="Rock">Rock</option>
                                    <option value="Ghost">Ghost</option>
                                    <option value="Dark">Dark</option>
                                    <option value="Steele">Steele</option>
                                    <option value="Fairy">Fairy</option>
                                    <option value="Dragon">Dragon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subtype">Subtipo</label>
                                <select class="form-control" id="subtype" name="subtype" required>
                                    <option value="Normal">Normal</option>
                                    <option value="Fire">Fire</option>
                                    <option value="Water">Water</option>
                                    <option value="Electric">Electric</option>
                                    <option value="Grass">Grass</option>
                                    <option value="Ice">Ice</option>
                                    <option value="Fighting">Fighting</option>
                                    <option value="Poison">Poison</option>
                                    <option value="Ground">Ground</option>
                                    <option value="Flying">Flying</option>
                                    <option value="Psychic">Psychic</option>
                                    <option value="Bug">Bug</option>
                                    <option value="Rock">Rock</option>
                                    <option value="Ghost">Ghost</option>
                                    <option value="Dark">Dark</option>
                                    <option value="Steele">Steele</option>
                                    <option value="Fairy">Fairy</option>
                                    <option value="Dragon">Dragon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="region">Región</label>
                                <select class="form-control" id="region" name="region" required>
                                    <option value="Kanto">Kanto</option>
                                    <option value="Johto">Johto</option>
                                    <option value="Sinnoh">Sinnoh</option>
                                    <option value="Hisui">Hisui</option>
                                    <option value="Paldea">Paldea</option>
                                    <option value="Hoenn">Hoenn</option>
                                    <option value="Unova">Unova</option>
                                    <option value="Kalos">Kalos</option>
                                    <option value="Alola">Alola</option>
                                    <option value="Galar">Galar</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
