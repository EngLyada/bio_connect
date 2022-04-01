<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIO-Connect- @yield('title')</title>
</head>
<body>
  <h1>  @yield('heading')</h1>
    <hr>
    <ul>
      <li ><a href='/'>Home</a></li>
      <li><a href='/about'>About Us</a></li>
      <li><a href='/contact'>Contact Us</a></li>
    </ul>
    @yield('content')

    <hr>
    <b>(C) <?php echo date('Y'); ?> BIO-Connect. All rights reserved by LYSMU LIMITED </b>
</body>
</html>