
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Testing </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

  @include ('layouts.navbar')
    <main role="main" class="container">

      <div class="row">
        @yield ('content')
        

        @include ('layouts.about')

      </div><!-- /.row -->

    </main><!-- /.container -->


    @include ('layouts.footer')
    
  </body>
</html>
