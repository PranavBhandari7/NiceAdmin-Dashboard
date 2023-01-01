<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nice Admin - Welcome Page</title>

    <!-- Favicons -->
    <link href="{{asset('dist/img/favicon.png')}}" rel="icon">
    <link href="{{asset('dist/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- Google Fonts --}}
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|
    Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" 
    rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet">
  </head>
  <body>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 
    sm:items-center py-4 sm:pt-0 text-center" 
    style="background-image: url('{{ asset('dist/img/welcome.jpg')}}');
    background-repeat: no-repeat, repeat; background-position: center; background-size: cover;
    height: 49.5rem">

  <nav class="d-flex align-items-center justify-content-between">
    <div class="container">
      <a href="" class="logo d-flex align-items-center">
        <img src="dist/img/logo.png" alt="">
        <span class="d-none d-lg-block text-light">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
  </nav><!-- End Logo -->
        <h1 class="text-light">Welcome!</h1>
        <h3 class="text-light"><strong>Nice Admin Website</strong></h3>
        <div style="width:50%" class="mx-auto mt-3">
          <p class="text-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores asperiores voluptatem voluptate dolorem corrupti eius deserunt, 
            placeat eveniet facere provident aperiam fugiat? Debitis aliquam adipisci, expedita repellat corrupti eveniet. Aliquam.</p>
        </div>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline px-2 py-2 btn btn-outline-light">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline px-2 py-2 btn btn-outline-light">Register</a>
                    @endif
            </div>
        @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>