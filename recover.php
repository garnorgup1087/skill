<?php
session_start();
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
          if($_SERVER["REQUEST_METHOD"] == "POST"){
            $Email=$_POST["Email"];
            $_SESSION['Email']=$Email;
            $sql= "SELECT * FROM login WHERE Email='$Email'";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num>0){
                   $logged=true;
                   header("Location: mail.php");
                 }
             
            else {
                 echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <strong>Invalid credentials!Try again.</strong>
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
  <form class="input-login"   method="post">
    <div class="form mx-5 my-5 text=centre">
  <div class="form-group  " >
    <label for="exampleInputEmail1">Email</label>
    <input type="username" name="Email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
  </div>
  <button type="submit" class="form-group-sub btn-primary">GET OTP</button>
      </div>
</form>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>

