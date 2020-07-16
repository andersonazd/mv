@if (session('statusVerde'))
        <div class="alert alert-success">
            {{session('statusVerde')}}
        </div>
    @endif
    @if (session('statusAzul'))
        <div class="alert info-color
        #33b5e5">
            {{session('statusAzul')}}
        </div>
    @endif
    @if (session('statusRojo'))
        <div class="alert #ffcdd2 red lighten-4">
            {{session('statusRojo')}}
        </div>
    @endif