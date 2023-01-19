<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="login";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
      die("Sorry! we failed to connect");
    }
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Username=$_POST['Username'];
        $dob=$_POST['dob'];
        $Password=$_POST['Password'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $confirm=$_POST['confirm'];
        
          // $exists=false;
      
          // Check whether this username exists
          $existSql = "SELECT * FROM `login` WHERE Username = '$Username'";
          $result = mysqli_query($conn, $existSql);
          $numExistRows = mysqli_num_rows($result);
          if($numExistRows > 0){
              // $exists = true;
              echo"Username Already Exists";
          }
          else{
              // $exists = false; 
              if(($Password == $confirm)){

                  $hash = password_hash($Password, PASSWORD_DEFAULT);
                  $sql = "INSERT INTO `login` (`Username`, `Email`, `Phone`, `Password`, `dob`,`Img_id`) VALUES ('$Username', '$Email', '$Phone', '$Password', '$dob','".$file."')";
                  $result = mysqli_query($conn, $sql);
                  if ($result){
                      echo"Success!Registered successfully.";
                  }
                  
                  header("Location: signin.php");
              }
              else{
                  echo"Passwords do not match";
              }
          }
      }
          
      ?>

<html>
<head>
<title>Sign Up</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--links-->
<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<!-- lato font -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="container mt-5">
            <div class="row" id="form-inputs">
                <div class="col-md-8 mx-auto d-block">
                    <div class="card mb-3" >
            <div class="row no-gutters" >
                <div class="col-md-4">
                <img src="https://picsum.photos/200/300" height="100%" width="100%"  alt="">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <img src="https://img.icons8.com/cotton/64/000000/groups--v1.png" class="mx-auto d-block">
                    <form  method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-user pt-3"></i>
                                </div>
                                <div class="col-md-11">
                                    <input type="text" name="Username" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Username" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-envelope pt-3"></i>
                                </div>
                                <div class="col-md-11">
                                    <input type="email" name="Email" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-user pt-3"></i>
                                </div>
                                <div class="col-md-11">
                                    <input type="date" name="dob" class="form-control border-top-0 border-left-0 border-right-0" placeholder="D.O.B." required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-user pt-3"></i>
                                </div>
                                <div class="col-md-11">
                                    <input type="text" name="Phone" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-key pt-3"></i>
                                </div>
                                <div class="col-md-11">
                                    <input type="password" name="Password" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-key pt-3"></i>
                                </div>
                                <div class="col-md-11">
                                    <input type="password" name="confirm" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Confirm Password" required>
                                </div>
                            </div>
                        </div>
                        
    
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Sign Up</button>
                    </div>
                    <p class="message">Already registered? <a href="signin.php">Login</a>
                    </p>
                    </form>
            </div>
            </div>
        </div>
        </div>
                </div>
            </div>
        </div>
    
    </section>
    
    
</body>