<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('assets/icons/logoweb.ico') }}">    

        <title>HairIdea</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark-py-3 fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">HairdIdea</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="#">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="#">Terbaru</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="#">Info</a>
                  </li>
                 
                </ul>
                <div class="d-flex">
                  <button class="btn btn-danger ms-auto">Search</button>
                </div>
              </div>
            </div>
          </nav>
        {{-- Navbar --}}

        <section id ="hero">
          <div class ="container text-center text-white">
                <h1>Selamat Datang</h1>
                <h1>Di HairIdea</h1>
          </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"     crossorigin="anonymous">
        </script>

    </body>

    </html>
