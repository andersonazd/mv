<div class="row">

    @foreach ($productos as $producto)

  <div class="col-lg-4 col-md-6 mb-4">

<div class="card mx-auto text-center" style="width: 18rem; margin-top: 40px; border-radius: 15px;">

  <!-- Card image -->
  <div class="view overlay ">
    <img class="card-img-top mx-auto" style="height: 200px; width:285px; border-radius: 15px;"  src="/images/{{$producto->avatar}}"
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title" style="font-size: 20px; font-family: 'Poppins', sans-serif;">{{$producto->name}}</h4>
    <!-- Text -->
    <p class="card-text" style="font-size: 18px; font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita itaque a rerum sit blanditiis totam nisi tempora aspernatur illum dolor?</p>
    <!-- Button -->
  <a href="/productos/{{$producto->slug}}" class="btn btn-primary">Más Información</a>


<!-- Card -->
@if (auth()->check())
        <!-- Button -->
      <a href="/productos/{{$producto->slug}}/edit" class="btn btn-unique waves-effect waves-light">Editar</a>
      <!-- Button -->
      <form class="form-group" method="POST" action="/productos/{{$producto->slug}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </form>


      @endif
    </div>

  </div>
  </div>
      @endforeach
</div>


