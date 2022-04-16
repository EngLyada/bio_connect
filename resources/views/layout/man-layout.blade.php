<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIO-Connect- @yield('title')</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container">
  <div class="row mt-5">
    <div class="col-md-4">
      <div class="list-group">
      <a class="list-group-item" >MAIN MENU</a>
        <a class="list-group-item" href='/'>Home</a>
        <a class="list-group-item" href='/about'>About Us</a>
        <a class="list-group-item" href='/contact'>Contact Us</a>
      </div>
    </div>
    <div class="col-md-8 border-left">
        <h1>  @yield('heading')</h1>
        @yield('content')
    </div>
  </div>
  
    
    <hr>
    <div align="center"><b>(C) <?php echo date('Y'); ?> BIO-Connect. All rights reserved by LYSMU LIMITED </b></p>
</body>
</html>