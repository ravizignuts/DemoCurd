
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h1>Welcome</h1>
 <a href="/home">Home Page</a><br>
 <a href="/about">About Page</a><br>
 <a href="/contact">Contact Page</a><br>

 <form method="GET" action="/home">
  <div class="form-group">
    <label for="uemail">Email address</label>
    <input type="email" class="form-control" id="uemail"  name="uemail" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="upass">Password</label>
    <input type="password" class="form-control" id="upass" name="upass" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
/*
if (isset($_REQUEST['submit'])) {
    $email = $_GET["uemail"];
    $pass = $_GET["upass"];
    echo "Welcome".$email.'</br>';
    echo "Your Password is ".$pass;
}
*/
?>





    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
