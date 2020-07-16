@extends('layouts.app')
@section('title', 'Crear')

@section('content')

@include('common.errors')
<div class="container">



<!-- Horizontal material form -->
<form class="form-group" method="POST" action="{{url('/productos')}}" enctype="multipart/form-data">
    <!-- Grid row -->
    @csrf
    <div class="form-group row">
      <!-- Material input -->
      <label for="name" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <div class="md-form mt-0">
          <input type="text" class="form-control" name="name" value="{{ old('name')}}" >
        </div>
      </div>
    </div>
    <!-- Grid row -->
    <div class="form-group row">
      <!-- Material input -->
      <label for="slug" class="col-sm-2 col-form-label">Slug (igual que el nombre)</label>
      <div class="col-sm-10">
        <div class="md-form mt-0">
          <input type="text" class="form-control" name="slug" value="{{ old('slug')}}" >
        </div>
      </div>
    </div>


    <div class="form-group row">
        <!-- Material input -->
        <label for="infointeres" class="col-sm-2 col-form-label">información de interes</label>
        <div class="col-sm-10">
          <div class="md-form mt-0">
            <input type="text" class="form-control" name="infointeres" value="{{ old('infointeres')}}"  >
          </div>
        </div>
      </div>
      <div class="form-group row">
        <!-- Material input -->
        <label for="usorecomendado" class="col-sm-2 col-form-label">Uso Recomendado</label>
        <div class="col-sm-10">
          <div class="md-form mt-0">
            <input type="text" class="form-control" name="usorecomendado" value="{{ old('usorecomendado')}}" >
          </div>
        </div>
      </div>
      <div class="form-group row">
        <!-- Material input -->
        <label for="lugarorigen" class="col-sm-2 col-form-label">Lugar de origen</label>
        <div class="col-sm-10">
          <div class="md-form mt-0">
            <input type="text" class="form-control" name="lugarorigen" value="{{ old('lugarorigen')}}" >
          </div>
        </div>
      </div>

    <div class="form-group row">
        <!-- Material input -->
        <label for="categorias" class="col-sm-2 col-form-label">Categoria</label>
        <div class="col-sm-10">
          <div class="md-form mt-0">

                  <select id="categorias" class="custom-select" name="categoria" >
                    @foreach ($categorias as $cat)
                    <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                    @endforeach
                  </select>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <!-- Material input -->
        <label for="climas" class="col-sm-2 col-form-label">Clima Recomendado</label>
        <div class="col-sm-10">
          <div class="md-form mt-0">

                  <select id="climas" class="custom-select" name="clima">
                    @foreach ($climas as $cli)
                    <option value="{{$cli->id}}">{{$cli->nombre}}</option>
                    @endforeach
                  </select>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <!-- Material input -->
        <label for="tipos" class="col-sm-2 col-form-label">Tipos de Plantas</label>
        <div class="col-sm-10">
          <div class="md-form mt-0">

                  <select id="tipos" class="custom-select" name="tipo">
                    @foreach ($tipos as $tipo)
                    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                    @endforeach
                  </select>
          </div>
        </div>
      </div>
    <!-- Grid row -->
    @csrf
    <div class="form-group row">
      <!-- Material input -->
      <label for="comentario" class="col-sm-2 col-form-label">Comentario</label>
      <div class="col-sm-10">
        <div class="md-form mt-0">
          <input type="text" class="form-control" name="comentario" value="{{ old('comentario')}}" >
        </div>
      </div>
    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="form-group row">
      <!-- Material input -->
      <label for="avatar" class="col-sm-2 col-form-label">Avatar</label>
      <div class="col-sm-10">
        <div class="md-form mt-0">
          <input type="file"  name="avatar" >
        </div>
      </div>
    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary btn-md">Agregar</button>
      </div>
    </div>
    <!-- Grid row -->
  </form>
  <!-- Horizontal material form -->

@endsection
</div>
