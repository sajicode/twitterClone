
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>{{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link href="/styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/styles/blogstyles.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        
        @include('layout.blog-entry-nav')
        
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">An Ambitious Clone</h1>
        <p class="lead blog-description">A twitter clone built with Bootstrap and Laravel.</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            
            @yield('content')

          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layout.blog-footer')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js" ></script>
   
    
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
