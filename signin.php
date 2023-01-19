<?php
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
             $Username=$_POST["Username"];
             $Password=$_POST["Password"];
             $sql= "SELECT * FROM login WHERE Username='$Username' AND Password='$Password'";
             $result=mysqli_query($conn,$sql);
             $num=mysqli_num_rows($result);
             if($num==1){
                    $logged=true;
                    header("Location: home.php");
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




<html>
<head>
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
<title>Sign In</title>
</head>

<!--Main content-->
<!-- SIGN IN FORM -->
<body>
<section >
	<div class="container col-md-11 my-5">
		<div class="row" id="form-inputs">
			<div class="col-md-8 mx-auto d-block">
				<div class="card mb-3" >
					<div class="row no-gutters" >
					  <div class="col-md-4">
						<img src="https://picsum.photos/200/300" height="100%" width="100%"  alt="">
					  </div>
					  <div class="col-md-8">
						<div class="card-body">
							<img src="https://img.icons8.com/color/96/000000/user-male-circle.png" class="mx-auto d-block">
							<h1 class="text-center">Sign In to SkillGrow</h1>
							<form  method="post">
								<div class="form-group">
									<div class="row">
										<div class="col-md-1 my-3">
												<i class="fas fa-envelope pt-3"></i>
										</div>
										<div class="col-md-11 my-3">
											<input type="name" id="Username" name="Username" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Username" required>
										</div>
									</div>
									
								 
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1 my-3">
											<i class="fas fa-key pt-3"></i>
										</div>
										<div class="col-md-11 my-3">
											<input type="password" id="Password" name="Password" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Password" required>
										</div>
									</div>
								</div>
								<div class="form-group form-check ">
								  <input type="checkbox" class="form-check-input" id="exampleCheck1">
								  <label class="form-check-label" for="exampleCheck1">Remember Me</label>
								</div>
								<div class="">
									<button type="submit" class="btn btn-danger">Login</button>
								</div>
								<p class="form-group my-3">Forgot password? <a href="recover.php">Forgot Password</a>
                                </p>
                                <p class="form-group my-2">Not registered? <a href="signup.php">Register</a>
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
</html>

