@extends('layouts.app')

@section('template_title')

@section('content')





en esta parte falta codigo del separador de imagen copear
      
<header class="header linear-white sendersimo-img"> 
          
        



    <section class="container">
                
      <div class="row justify-content-md-center">
      <!-- en este pedaso se pone texto relacionado al tema de turismo -->
      
      <div class="col-12 text-center">
      <h2 class="text-danger text-uppercase">popayán</h2>
      <h3 class="text-capitalize">Las mejores rutas de Trekking y Senderismo en Popayán, Cauca (Colombia) </h3>
      <p class="text-muted">Buscas las mejores rutas de senderismo en Popayán? Si te estás preparando para hacer senderismo, ciclismo, correr o explorar otras actividades al aire libre. 

    las  más destacadas de Popayán se encuentran:
      
      </p>
      </div>


       <!-- galeria de los lugares -->
<div class="text-center pt-5">

  <div>
    <h1 class="">galeria </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing.
    </p>
    @foreach ($lugar as $lugar)
    @if($lugar->tipolugar_id == 2);
    {{-- <div class="row mt-4"> 
    <div class="col-sm-12 col-md-3 col-lg-4 py-3">
    <div class="card" style="width: 18rem;">
        <img src=""  class="card-img-top" >
            <h5 class="card-title"><p> {{ $lugar->nombre }}</p></h5>
            <p  class="card-text">  {{ $lugar->direccion }}
              {{ $lugar->horarios }}
              {{ $lugar->descripcion }}.</p>
            <a href="#" class="btn btn-danger">Go somewhere</a>
          </div>
        </div>
    </div>
    </div>
    </div>  
   
  </div>
  <div class="row galeria">
    <div class="col-lg-4">
      <img src="foto_url/{{$lugar->foto_url}}" alt="">
    </div>
    {{-- <div class="col-lg-4">
      <img src="https://images.pexels.com/photos/3597423/pexels-photo-3597423.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    </div>
    <div class="col-lg-4">
      <img src="https://images.pexels.com/photos/1005417/pexels-photo-1005417.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    </div>
    <div class="col-lg-4">
      <img src="https://images.pexels.com/photos/3621344/pexels-photo-3621344.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    </div>
    <div class="col-lg-4">
      <img src="https://images.pexels.com/photos/3692550/pexels-photo-3692550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    </div>
    <div class="col-lg-4">
      <img src="https://images.pexels.com/photos/3693787/pexels-photo-3693787.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    </div> --}}
    
  </div>


@endif
@endforeach

<div>
  <h1 class="">rutas mas populares 
  </h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing.
  </p>

</div>
       
<div class="card_ultima bg-dark">
<div class="face front">
  <img src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&w=300" alt="imagen">
  <h3>holaaa</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing.
  </p>


  <div class="link">
    <a href="" class="" id="detalles">detalles </a>
  </div>
</div>






</div>
      

  
      </section>

@endsection