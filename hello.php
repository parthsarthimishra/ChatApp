<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'phpass');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'db');
$username=$_SESSION['username'];

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM users WHERE username = '$username'";
$results = mysqli_query($conn , $sql);
$result_check = mysqli_num_rows($results);
$row=mysqli_fetch_array($results);
$img = 'sample.jpeg';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign up form</title>
</head>
<body>
  <div class="for-form">
<form action="" method="post">
        <label for="fname">Name</label><br>
        <input type="text" id="fname" name="fname" value=<?php echo  $row["Name"];?>><br><br>
       <label for="phone">phone</label><br>
        <input type="text" id="phone" name="phone"><br><br>
        <label for="age">Age</label><br>
        <input type="text" id="age" name="age"><br><br> 
        <label for="bio">bio</label><br>
        <input type="text" id="bio" name="bio"><br><br> 
        <label for="email">E-mail</label><br>
        <input type="text" id="email" name="email" value=<?php echo  $row["email"];?>><br><br>
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" value=<?php echo  $_SESSION['username']?>><br><br>
       <!-- <label for="password">Password</label><br>
        <input type="password" id="password" name="password" ><br><br>
        <label for="cpassword">Confirm Password</label><br>
        <input type="password" id="cpassword" name="confirm_password"><br><br>
-->
        <button type="submit"  onclick="submit()">Update</button>
      </form>
</div>
<div class="for-image"><img src='<?php echo  $img?>'></div>
      <br>
      
      <script src="signup.js"></script>
</body>
</html>


<!--
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3>//<?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
-->