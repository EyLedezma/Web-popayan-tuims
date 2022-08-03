
    
@extends('layouts.app')

@section('template_title')
  
@section('content')
<div id="cards_landscape_wrap-2">
         
  <div class="container ">
      <div class="row">
          @foreach ($lugar as $lugar)
          @if($lugar->tipolugar_id==1)
              <div class="card-flyer col-3">
                  <div class="text-box">
                      <div class="image-box ">
                          <img src="foto_url/{{ $lugar->foto_url }} " width="95%"alt="" />
                      </div>
                      <div class="text-container">
                          <h6 class="card-title">{{ $lugar->nombre }}
                      </div>
                  </div>
              </div>
            
              @endif
            </div>
              @endforeach
    
@endsection
