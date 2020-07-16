
<header>

    @guest

    <a href="/productos" class="logonavBar">Mari<span>s</span>ol vivero</a>
    <nav>


    <ul>
        <li><a href="/productos">Inicio</a></li>
        <li><a href="/quienesomos">Quienes Somos</a></li>
        <li><a href="/nproductos">Nuestros Servicios</a></li>
        <li><a href="/contacto">Contacto</a></li>
    </ul>
    </nav>
        @else


    <a href="/productos" class="logonavBar">{{ Auth::user()->name }}</a>
      <a href="/productos" class="logonavBar">Marisol Vivero</a>
    <ul>
        <li><a href="/productos">Hogar</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </div>
    </ul>
    @endguest

</header>
<section class="banner">

</section>
<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    })

        </script>



