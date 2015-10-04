{{-- app/views/layouts/oeggef.blade.php --}}

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  @yield('myheader')
  <link rel="stylesheet" href="{{asset('css/normalize.css')}}" />
  <link rel="stylesheet" href="{{asset('css/foundation.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/gef.css')}}" />
  <script src="{{asset('js/vendor/modernizr.js')}}"></script>
</head>
<body>
  <div class="header">
    <div class="row">
      <div class="small-12 columns">
        <h1 class="logotype">
          <a href="/" title="Hjem"><img src="{{asset('img/logo.png')}}" alt="Hjem" />
          </a>
          <a href="/" class="site-name" title="Hjem">Ørestad Gymnasium gør en forskel - 4/11 2015</a>
        </h1>
      </div>
    </div>
  </div>
  
  @yield('body')

  <script src="{{asset('js/vendor/jquery.js')}}"></script>
  <script src="{{asset('js/foundation.min.js')}}"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
