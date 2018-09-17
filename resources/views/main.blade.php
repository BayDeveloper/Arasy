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

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blogs
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Article</a>
              <a class="dropdown-item" href="#">News</a>
              <a class="dropdown-item" href="#">Forum</a>
            </div>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Department
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                 <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                  <a  class="dropdown-item" tabindex="-1" href="#">Trip Consultant</a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                      <a class="dropdown-item" href="#">Form Consultant</a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item"><a href="tcnewtrip">Request Pelanggan</a></li>
                          <li class="dropdown-item"><a href="#">Request ...</a></li>
                      </ul>
                    </li>
                     <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                      <a class="dropdown-item" href="#">Job Progress</a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item"><a href="tcnewtrip">List Progress</a></li>
                          <li class="dropdown-item"><a href="tcnewtrip">New Progress</a></li>
                          <li class="dropdown-item"><a href="tcnewtrip">On Progress</a></li>
                          <li class="dropdown-item"><a href="tcnewtrip">Success</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-item"><a href="#">Other ...</a></li>
                  </ul>
                </li>
                 <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                  <a  class="dropdown-item" tabindex="-1" href="#">Trip Designer</a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                      <a class="dropdown-item" href="#">Form Designer</a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item"><a href="#">Request Product</a></li>
                          <li class="dropdown-item"><a href="#">Request ...</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-item"><a href="#">Other ...</a></li>
                  </ul>
                </li>
                 <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                  <a  class="dropdown-item" tabindex="-1" href="#">Trip Mate</a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                      <a class="dropdown-item" href="#">Form Mate</a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item"><a href="#">Request Utility</a></li>
                          <li class="dropdown-item"><a href="#">Request ...</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-item"><a href="#">Other ...</a></li>
                  </ul>
                </li>
                 <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                  <a  class="dropdown-item" tabindex="-1" href="#">Development</a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                      <a class="dropdown-item" href="#">Form Development</a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item"><a href="#">From Survey</a></li>
                          <li class="dropdown-item"><a href="#">Request ...</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-item"><a href="#">Other ...</a></li>
                  </ul>
                </li>
                 <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                  <a  class="dropdown-item" tabindex="-1" href="#">Trip Promotion</a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                      <a class="dropdown-item" href="#">Form Proposal</a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item"><a href="#">Proposal</a></li>
                          <li class="dropdown-item"><a href="#">Request ...</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-item"><a href="#">Other ...</a></li>
                  </ul>
                </li>
                <li class="dropdown-divider"></li>
                 <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                  <a  class="dropdown-item" tabindex="-1" href="#">Some other action</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a tabindex="-1" href="#">Second level</a></li>
                     <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">
                      <a class="dropdown-item" href="#">Even More..</a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item"><a href="#">3rd level</a></li>
                             <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#"><a class="dropdown-item" href="#">another level</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="#">4th level</a></li>
                                <li class="dropdown-item"><a href="#">4th level</a></li>
                                <li class="dropdown-item"><a href="#">4th level</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-item"><a href="#">3rd level</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-item"><a href="#">Second level</a></li>
                    <li class="dropdown-item"><a href="#">Second level</a></li>
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
