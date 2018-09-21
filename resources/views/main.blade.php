<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

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
        <ul class="navbar-nav mr-auto">

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
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Department
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Trip Consultan</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Form Consultan</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="tcnewtrip">Form Request Pelanggan</a></li>
                      <li><a class="dropdown-item" href="#">Another Form..</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Jon Progress</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">List Progress</a></li>
                    <li><a class="dropdown-item" href="#">New Progress</a></li>
                    <li><a class="dropdown-item" href="#">On Progress</a></li>
                    <li><a class="dropdown-item" href="#">Success</a></li>
                  </ul>
                </li>

                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <li class="navbar-nav dropdown">
          <a class="btn btn-danger dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <!-- Dropdown menu links -->
            <li class="dropdown-item"><a href="#">Setting</a></li>
            <li class="dropdown-item"><a href="#">Sign Out</a></li>
          </ul>
        </li>
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
      var ioa = 0;
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

      function myFunction() {
        var x = document.getElementById("myTextarea").value;
        document.getElementById("demo").innerHTML = x;
      };

      // Select2 begin
      $(document).ready(function() {

        $(".select2-akomodasi").select2({
            placeholder: "Pilih Akomodasi"
        });
        $(".select2-transportasi").select2({
            placeholder: "Pilih Transportasi"
        });
        $(".select2-triptools").select2({
            placeholder: "Pilih Trip Tools"
        });
        $(".select2-dokumentasi").select2({
            placeholder: "Pilih Dokumentasi"
        });
        //check condition other akomodasi
        $('.select2-akomodasi').on('change', function() {
          data = $(".select2-akomodasi").val();
          if (typeof data !== 'undefined' && data.length > 0) {
            // the array is defined and has at least one element
            //console.log("data !null");
            for (var c in data)
            {
               //console.log("row " + c);
               for (var j in data[c])
                 {
                   //console.log(" " + data[c][j]);
                   if(data[c][j] == '4'){
                     ioa = 1;
                     text_other();
                   }else{
                     ioa = 0;
                     text_other();
                   }
                 }
            }
          }else{
            //console.log("data null");
            ioa = 0;
            text_other();
          }

          $("#oa").val(data);
          return data;
        });
        //check condition other transportasi
        $('.select2-transportasi').on('change', function() {
          var data = $(".select2-transportasi option:selected").text();
          $("#other-transportasi").val(data);
        });
        //check condition other triptools
        $('.select2-triptools').on('change', function() {
          var data = $(".select2-triptools option:selected").text();
          $("#other-triptools").val(data);
        });
        //check condition other dokumentasi
        $('.select2-dokumentasi').on('change', function() {
          var data = $(".select2-dokumentasi option:selected").text();
          $("#other-dokumentasi").val(data);
        });
    });
    //Select2 End

    //Add Textbox other Begin
    function text_other() {
      var count = $("#other-akomodasi").children().length;
      if(ioa == 1){
        if(count != 1){
          var text_akomodasi = document.createElement("INPUT");
          $("#other-akomodasi").append(text_akomodasi);     // Append new elements
          alert(count);
          ioa = 0;
        }
      }else{
        $("#other-akomodasi").empty();
        ioa = 0;
      }
      return ioa;
    };
    //Add Textbox other End

    </script>

  </body>
</html>
