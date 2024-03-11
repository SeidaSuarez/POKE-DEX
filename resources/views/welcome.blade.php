@extends('auth.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-12">
            <div class="card">
                <div class="card-header">Listado de Pokemon</div>

                <div class="card-body">
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
                                        <td>{{ $pokemon->poke_name }}</td>
                                        <td class="text-center">{{ $pokemon->type }}</td>
                                        <td class="text-center">{{ $pokemon->subtype }}</td>
                                        <td class="text-center">{{ $pokemon->region }}</td>
                                        <td class="text-center">{{ $pokemon->user->name }}</td>
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


