<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Imaginarium spy</title>
  <link rel="icon" href="{{ asset('css/img/fav_image.png') }}">

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="block-full-fill" data-spy="scroll" data-target=".site-navbar-target" data-offset="200">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-6 col-lg-4 top-buffer mb-lg-0 " data-aos="fade" data-aos-delay="300">
        <form action="{{ route('all.players') }}">
          <div class="row justify-content-center">
            <input type="submit" value="Новые игроки" class="btn btn-primary bg-transparent py-2 px-4 text-white">
          </div>
        </form>
      </div>
    </div>
  </div>
  @yield('content')

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</html>