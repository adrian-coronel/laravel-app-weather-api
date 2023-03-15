<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      
      nav{
        height: 60px;
      }
      @media (min-width:  540px){
      #navbarNav{
        justify-content: flex-end;
      }
    }
    </style>
  </head>
  <body>

    <header class="mb-auto">
      <nav class="navbar navbar-expand-sm navbar-light bg-warning">
        <div class="container">
          <h3 class="float-md-start mb-0">Laravel Weather App</h3>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item mr-3">
                <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>    
              </li>
              <li class="nav-item mr-3">
                <a class="nav-link fw-bold py-1 px-0" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>

    @yield('content')


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>