@extends('layouts.app')

@section('title', 'Quienes Somos')
@section('content')
@include('common.mensajesCrud')
@include('common.errors')

<section class="main-banner-section style-four container">
<div class="row">
    <div class="col-lg-6 col-md-6 mb-4">

            <div class="title"> </div>
            <br>
                <h2>Marisol <br>
                  <span style="font-size:60px;">Vivero</span>
               </h2>
               <br><br>

              <div class="text">
                Es una empresa familiar que nace por la convicción de entender que no se pueden perder legados tan importantes
                como los saberes tradiciones de los abuelos, con el objetivo de darle un aporte tecnico a dichos saberes
                y dejarlos vigentes a la sociedad. <br>
              </div>
         </div>

         <div class="col-lg-6 col-md-6 mb-4">
             <br>
            <h2>Estamos <br>
                <span style="font-size:60px;">Ubicados</span>
             </h2>
             <br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5079417545235!2d-75.49540268262596!3d6.259545926800314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44264533e5f74d%3A0x21be267cbc925d2e!2sMarisol%20Vivero!5e0!3m2!1ses-419!2sco!4v1587920840095!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:3px solid;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>


    </div>


</section>


@endsection
