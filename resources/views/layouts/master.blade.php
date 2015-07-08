<!DOCTYPE HTML>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Listings : Hello there !</title>
    <link rel='stylesheet' type='text/css' href='/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href='/css/base.min.css'>
  </head>
  <body>
    @if(isset($info))
      <div class='alert alert-info'>
	<?php echo $info ?>
      </div>
    @endif
    <div class='container'>
      @yield('content')
    </div>
    <script src='/js/jquery.min.js'></script>
    <script src='/js/bootstrap.min.js'></script>
    <script src='/js/base.js'></script>
  </body>
<html>
    
