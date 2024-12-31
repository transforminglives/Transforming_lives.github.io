@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<section class="carrusel">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              @foreach($inicio as $item)
              <div class="carousel-item {{$item->class}}">
                <img src="{{asset('imagen/'.$item->image)}}" class="d-block w-100" height="70%" width="200%" alt="{{$item->title}}">
                <div class="carousel-caption d-none d-md-block">
                  <h5>{{$item->title}}</h5>
                  <p>{{$item->description}}</p>
                </div>
              </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section class="informacion" id="informacion">
            <section class="contenido">
                <section class="mision">   
                <h2>Mision</h2>
                <p>{{$Mision->name}}</p>  
                </section>
                <br>  
                <section class="vision">
                    <h2>Vision</h2>
                    <p>{{$Vision->name}}</p>  
                </section>
            </section>
            <section class="barra" id="Donaciones">
              <h2><i class="fa-solid fa-hand-holding-heart"></i> Donaciones</h2>
            </section>
            <!----------------------------------------------->
            <div class="carrusel-tiktok">
                <section class="carrusel2">
                <div id="carouselExample" class="carousel slide">
                  <div class="carousel-inner">
                  @foreach($inicio as $item)
                  <div class="carousel-item {{$item->class}}">
                    <img src="{{asset('imagen/'.$item->image)}}" class="d-block w-100" height="70%" width="200%" alt="{{$item->title}}">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>{{$item->title}}</h5>
                      <p>{{$item->description}}</p>
                    </div>
                  </div>
                  @endforeach
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                
              </section>
              <div class="sec-titok">
                <blockquote style="height: 520px; width: 350px;" class="tiktok tiktok-embed" cite="https://www.tiktok.com/@transforming_lives24/video/7401390587213106437" data-video-id="7401390587213106437"> <section><script async src="https://www.tiktok.com/embed.js" ></script>
              </div>
            </div>
              
          
            <!-------------------------------------------------------->
        
            <section class="barra" id="servicios">
            <h2><i class="fa-solid fa-hands-holding-child"></i> Ayuda</h2>
            </section>
      @foreach ($servicios as $item)
         <section class="items">
            <section class="productos">
                <div><img src="{{asset('imagen/'.$item->image)}}" alt="IMG1" width="280" height="280"></div>
            </section>
            <br>
            @endforeach
@endsection