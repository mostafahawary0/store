<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title','web') </title>
    <link href="/css/bootstrap.min.css"  rel="stylesheet">
    <!-- Choices.js-->
    <link rel="stylesheet" href="/vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

  @include('dashboard.include.header')

  @yield('content')

  @include('dashboard.include.footer')




  </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js" ></script>
       <!-- JavaScript files-->
       <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/just-validate/js/just-validate.min.js"></script>
    <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>

    <script src="/js/front.js"></script>
 
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script> 

 
<script>
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );
</script> 


  </body>
</html>