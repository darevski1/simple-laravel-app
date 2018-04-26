
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._header')
  </head>
    <body>
        @include('partials._nav')
       @include('inc.messages')
       <div class="container">
         <div class="row">
          <div class="col-md-3">
              @include('inc.sidebar')
          </div>
          
          <div class="col-md-9">
            @yield('content')
          </div>
          
        </div>
       </div>

    </body>
</html>

