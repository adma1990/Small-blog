<!DOCTYPE HTML>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css" >
  <title></title>
 </head>
 <body>

<nav class="justify-content-center navbar navbar-expand-lg navbar-dark" style="background: #292929;">
  <a class="navbar-brand" href="#"><img src="{{ asset('images/tatoo1.png') }}" alt="" style="width: 400px"></a>
</nav>

<hr>

<nav class="navbar navbar-expand-lg navbar-dark" style="background: #292929;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link mr-5" href="/">Главная <span class="sr-only">(current)</span></a>
      </li>

    

      <li class="nav-item">
        <a class="nav-link mr-5" href="/blog">Блог</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-5" href="/gallery">Галерея</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-5" href="#">Цены</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-5" href="#">О нас</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-5" href="/comment">Комментарии</a>
      </li>
  </div>
</nav>


  @yield('content')

  <footer>
    <hr>
    <div class="container">
      <p class="text-light">Coryright</p>
    </div>
  </footer>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 </body>
</html>
