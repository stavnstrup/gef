{{-- app/views/layouts/oeggef.blade.php --}}

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/gef.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>
<body>
  <div class="header">
    <div class="row">
      <div class="small-12 columns">
        <h1 class="logotype">
          <a href="/" title="Hjem"><img src="img/logo.png" alt="Hjem" />
          </a>
          <a class="site-name" title="Hjem">Ørestad Gymnasium</a>
        </h1>
      </div>
    </div>
  </div>
  
  @yield('body')

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
