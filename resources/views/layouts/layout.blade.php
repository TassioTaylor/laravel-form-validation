<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>

      <div class="container">
        <h1>Laravel: Fomulários e Validações</h1><br>
          @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismmiss="alert" arial-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  {{Session::get('message')}}
          </div>
          @endif
        @yield('content')
      </div>

    </body>
</html>