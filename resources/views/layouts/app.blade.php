<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>

 <div id="app">

      @include('layouts.navbarU')
<div class="container">
    <main class="py-4">
        @yield('content')
    </main>
</div>
    </div>
    <div>
        @yield('pie')
        @include('layouts.piepagina')
    </div>

<!-- Scripts -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}" ></script>


</body>
</html>
