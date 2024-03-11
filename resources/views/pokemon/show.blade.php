@extends('auth.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles del Pokemon</div>
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
                        @if($pokemon)
                            <p><strong>Nombre:</strong> {{ $pokemon->poke_name }}</p>
                            <p><strong>Tipo:</strong> {{ $pokemon->type }}</p>
                            <p><strong>Subtipo:</strong> {{ $pokemon->subtype }}</p>
                            <p><strong>Región:</strong> {{ $pokemon->region }}</p>
                            <p><strong>Usuario:</strong> {{ $pokemon->user->name }}</p>
                        @else
                            <p>No se encontró el Pokemon.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

