<header>
    @guest
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">

    <div class="container">
        <a class="navbar-brand" >Mari<span>s</span>ol Vivero</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/quienesomos">Quienes Somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Nuestros Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacto">Contacto</a>
              </li>
          </ul>

    </div>

</div>
  </nav>
  @else
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">

    <div class="container">
        <a class="navbar-brand">{{ Auth::user()->name }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/home">Hogar</a>
              </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Salir') }}</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
            </ul>

            </div>
      </div>
      @endguest

</header>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 class="animated bounceInRight" style="animation-delay: 1s">Semillas de Arbol duro</h5>
            <p class="animated bounceInLeft" style="animation-delay: 2s">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum distinctio minus incidunt asperiores, tenetur illo?</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="../images/abanner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 class="animated slideInDown" style="animation-delay: 1s">Semillas de Aguacate</h5>
            <p class="animated fadeInUp" style="animation-delay: 1s">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum distinctio minus incidunt asperiores, tenetur illo?</p>
          </div>
        </div>
      <div class="carousel-item">
        <img src="../images/bbanner.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 class="animated zoomIn" style="animation-delay: 1s">Semillas de Girasol</h5>
            <p class="animated fadeInLeft" style="animation-delay: 1s">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum distinctio minus incidunt asperiores, tenetur illo?</p>
          </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

