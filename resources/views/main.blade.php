<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <title>Arasy</title>
    <style>
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu a::after {
      transform: rotate(-90deg);
      position: absolute;
      right: 6px;
      top: .8em;
    }

    .dropdown-submenu .dropdown-menu {
      top: 0;
      left: 100%;
      margin-left: .1rem;
      margin-right: .1rem;
    }
    </style>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Submenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another submenu action</a></li>


                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                      <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                      <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                    </ul>
                  </li>



                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

<div class="jumbotron">
  <h1 class="display-4">Main Design</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
</div>

    <div class="container">

      @yield('content')

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script>
      $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
          $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
          $('.dropdown-submenu .show').removeClass("show");
        });


        return false;
      });
    </script>

  </body>
</html>
