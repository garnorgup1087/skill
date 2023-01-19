<?php
  session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $servername="localhost";
    $username="root";
    $password="";
    $database="login";
    $logged=false;
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("Sorry! we failed to connect");
    }
    else{
    $Password=$_POST["Password"];
    $confirm=$_POST["confirm"];
    if(($Password == $confirm)){
    $Password=$_POST["Password"];
    $Email=$_SESSION['Email'];
    $sql="UPDATE `login` SET `Password` = '$Password' WHERE `login`.`Email`='$Email' ;";
    $result=mysqli_query($conn,$sql);
    header("Location: signin.php");
    }
    else{
      echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <strong>Passwords do not match!</strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>';
    }
  }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Recover Password</title>
  </head>
  <body>
  <form  method="post">
  <div class="form-group mx-5 my-5 text=centre">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" id="Password" name="Password" class="form-control" id="exampleInputPassword1"required>
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="text" id="confirm" name="confirm" class="form-control" id="exampleInputPassword1"required>
    <button type="submit" class="btn btn-primary my-3">LOGIN</button>
  </div>
  
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>


