@extends('layouts.app')

@section('title', 'Contacto')


@section('content')
@include('common.mensajesCrud')
@include('common.errors')

<div class="contenidocontacto">
    <h1 class="logocontacto">Contactanos</h1>
    <div class="contact-wrapper">
        <div class="contact-form">
            <h3>Contactanos</h3>
            <form  action="{{url('/contacto')}}" method="POST">
                @csrf
            <p>
                <label for="nombre">Nombre Completo</label>
                <input type="text" value="{{ old('nombre')}}" id="nombre" name="nombre">
            </p>
            <p>
                <label for="email">Correo Electronico</label>
                <input type="email" value="{{ old('email')}}" id="email" name="email">
            </p>
            <p>
                <label for="asunto">Asunto</label>
                <input type="text" value="{{ old('asunto')}}" id="asunto" name="asunto">
            </p>
            <p class="block">
                <label for="mensaje">Mensaje</label>
                <textarea  type="text" id="mensaje" name="mensaje" rows="3"></textarea>
            </p>
            <p class="block">
                <button type="submit">
                    Enviar
                </button>
            </p>

            </form>
        </div>

        <div class="contact-info">
            <h4>Más Información</h4>
            <ul>
                <li>
                    <i class="fas fa-envelope"> Marisolvivero@gmail.com</i>
                </li>
                <li>
                    <i class="fas fa-map-marker-alt"> Corregimiento de Santa Elena, Medellin(Ant)</i>
                </li>
                <li>
                    <i class="fas fa-phone-square"> Celular 314 4217898</i>
                </li>

            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ratione numquam dolorem blanditiis quos rerum sit quia minus accusantium temporibus.</p>
            <p>MarisolVivero.com</p>
        </div>
    </div>

</div>


@endsection
