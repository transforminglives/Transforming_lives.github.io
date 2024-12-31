<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')
    <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
  <header>
    <div class="menu">
      <section>
       <img class="img" src="{{asset('imagen/'.$empresa->logo)}}" alt="" width="120" height="100">
    </section><br>

        <section class="menu-nav">
          <input type="checkbox" class="menu-checkbox" id="menu-toggle-checkbox">
          <label for="menu-toggle-checkbox" class="menu-toggle">
              &#9776; <!-- Icono de menú -->
          </label>
          <div class="nav-menu">
            <ul>
              <li><a href="/index.html"><i class="fa-solid fa-house"></i> Inicio</a></li>
              <li><a href="#informacion"><i class="fa-solid fa-users"></i> Sobre nosotros</a></li>
              <li><a href="#Donaciones"><i class="fa-solid fa-hand-holding-heart"></i> Donaciones</a></li>
              <li><a href="#servicios"><i class="fa-solid fa-hands-holding-child"></i> Ayuda</a></li>
              <li><a href="#contactos"><i class="fa-solid fa-phone"></i> Contacto</a></li>
          </ul>
          </div>
        </section>

    </div>
</header>

   <main >
     @yield('content')
    <!-------------------------------------------------------->
  </main>
<footer>
    <section class="contactos" id="contactos">
        <section class="inf">
           <h3>REDES SOCIALES</h3>
           <ul class="ul-foot">
            @foreach ($redes as $item)
              <li><a target="_blank" href="{{$item->link}}"><i class="{{$item->icon}}"></i>{{$item->title}}</a></li>
              <li><a target="_blank" href="https://www.instagram.com/tran.sforminglivesquito?igsh=OGg3NW8wMTBpM3Rv"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
              <li><a target="_blank" href="https://wa.link/gkwhg0"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a></li>
            @endforeach
            </ul>
        </section>
        <section class="inf">
            <h3>CONTACTO</h3>
           <ul class="ul-foot">
              <li><a href="https"><i class="fa-solid fa-phone"></i>{{$empresa->numero}}</a></li>
              <li><i class="fa-regular fa-envelope"></i> fundaciontransforminglives@gmail.com</li>
              
            </ul>
        </section>
        <section class="inf-g">
            <h3>GEOLOCALIZACIÓN </h3>
           <div>
            <iframe src="{{$empresa->georeferencia}}" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
        </section>
    </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
  document.querySelectorAll('.nav-menu a').forEach((link) => {
      link.addEventListener('click', () => {
          document.querySelector('.menu-checkbox').checked = false; // Cierra el menú
      });
  });
</script>

</body>
</html>