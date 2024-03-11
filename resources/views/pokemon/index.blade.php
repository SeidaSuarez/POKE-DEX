@extends('auth.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listado de Pokemon</div>
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

                        <a href="{{ route('pokemon.create') }}" class="btn btn-primary">Crear nuevo Pokemon</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th class="text-center">Tipo</th>
                                        <th class="text-center">Subtipo</th>
                                        <th class="text-center">Región</th>
                                        <th class="text-center">Usuario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pokemons as $pokemon)
                                        <tr>
                                            <td class="text-center">{{ $pokemon->poke_name }}</td>
                                            <td class="text-center">{{ $pokemon->type }}</td>
                                            <td class="text-center">{{ $pokemon->subtype }}</td>
                                            <td class="text-center">{{ $pokemon->region }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('pokemon.show', $pokemon->pokemons_id) }}"
                                                    class="btn btn-info">Ver</a>
                                                <a href="{{ route('pokemon.edit', $pokemon->pokemons_id) }}"
                                                    class="btn btn-warning">Editar</a>
                                                <form action="{{ route('pokemon.destroy', $pokemon->pokemons_id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
