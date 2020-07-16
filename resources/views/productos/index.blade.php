@extends('layouts.app')

@section('title', 'Productos')

@section('content')

    <div class="text-center">

        <div class="titlePrincipal">
            <h1>Bienvenido a Marisol Vivero</h1>
            <p>Sembrar un árbol significa florecer un mañana, simbolo de Alegria y Vida.</p>

        </div>
        @include('common.mensajesCrud')
    </div>

    @include('productos.cardproductos')

</div>
@endsection
