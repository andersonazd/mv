@extends('layouts.app')

@section('title', 'Contacto')


@section('content')
    <!--Section: Pricing v.2-->
<section class="pb-3">

    <!--Section heading-->
    <h1 class="h1 pt-4">Detalles de {{$producto->name}}</h1>
    <!--Section description-->
    <p class="grey-text mb-5 mt-5 px-3">{{$producto->infointeres}}.</p>

    <!--Grid row-->
    <div class="row">


      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4">

        <!-- Card -->
        <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(4).jpg');">

          <!--Pricing card-->
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-indigo-strong py-3 px-3">

            <!--Content-->
            <div class="card-body">
              <h5>Productos</h5>
              <!--Price-->
              <div class="price pt-0">
                <h1>Información de Interes</h1>
              </div>
              <!--Price-->
              <ul class="striped">

                  <p><strong>Originario de: </strong> {{$producto->lugarorigen}}</p>

                  <p><strong>Clima Aconsejable: </strong> {{$producto->clima->nombre}}</p>

                  <p><strong>Diseñada para: </strong> {{$producto->usorecomendado}}</p>

                  <p><strong>Diseñada para: </strong> {{$producto->usorecomendado}}</p>

                  <p><strong>Tipo de planta: </strong> {{$producto->tipo->nombre}}</p>

              </ul>
              <a class="btn btn-outline-white"> Llama ya!</a>
            </div>

          </div>
          <!--Pricing card-->
        </div>
      </div>

      <div class="col-lg-6 col-md-12 mb-4">

        <div class="card text-center " style="height: 418px;">

            <!-- Card image -->
            <div class=" ">
              <img class="card-img-top" style="height: 200px; width:285px; "  src="/images/{{$producto->avatar}}"
                alt="Card image cap">
              <a href="">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!-- Card content -->
            <div class="card-body">

              <!-- Title -->
              <h4 class="card-title">{{$producto->name}}</h4>
              <!-- Text -->
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita itaque a rerum sit blanditiis totam nisi tempora aspernatur illum dolor?</p>

            <!-- Text -->
            <p class="card-text">Aqui va Más    información que desea agregar del producto</p>

        </div>



    <!-- div col -->
       </div>
    </div>
    <!--Grid row-->


  </section>
  <!--Section: Pricing v.2-->





@endsection
