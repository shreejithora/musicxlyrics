<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/design.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



  </head>
  <body>






    <div class="site-wrapper">
    	@include('partials.header')
    	@yield('container')
    </div>

<!--javascript -->

<script src="{{asset('js/jquery-slim.min.js" type="text/javascript')}}"></script>
<script src="{{asset('js/jquery-1.9.1.min.js" type="text/javascript')}}"></script>
<script src="{{asset('js/popper.min.js" type="text/javascript')}}"></script>
<script src="{{asset('js/bootstrap.min.js" type="text/javascript')}}"></script>



  </body>




</html>
