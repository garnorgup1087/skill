<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="me.css">
    <title>SkillGrow</title>
  </head>
  <body id="body" >
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
     <script>
        function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_translate_element");
        }
     </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning" >
      <div class="container-fluid">
        <a class="navbar-brand " href="#"><h1 style= font-size:50px>SkillGrow</h1></a>
      </div>
      <div class="d-flex">
        <div id="google_translate_element"></div>
        <a class="btn btn-primary mx-2" href="signin.php" role="button">LOGIN</a>
        <a class="btn btn-primary mx-2" href="signup.php" role="button">SIGN UP</a>
      </div>
    </nav>
     
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" bg-warning>
    <div class="carousel-item active" bg-warning>
      <img src="s.jpg" class="d-block w-100" alt="..." height="650">
      <a class="btn btn-primary mx-10 my-2" href="index.html" bg-warning role="button" >Online Classes</a>
    </div>
    <div class="carousel-item" bg-warning>
      <img src="m.jpg" class="d-block w-100" alt="..." height="650">
      <a class="btn btn-primary my-2" bg="warning" href="http://www.niti.gov.in" role="button">Internship</a>
    </div>
    <div class="carousel-item" bg-warning>
      <img src="x.jpg" class="d-block w-100" alt="..." height="650">
      <a class="btn btn-primary my-2"  bg="warning" href="http://www.sportsclub-gujarat.com/" role="button">Co-Curricular Activities</a>
    </div>
    <div class="carousel-item" bg-warning>
      <img src="y.jpg" class="d-block w-100" alt="..." height="650">
      <a class="btn btn-primary my-2" href="feedback.txt" role="button" bg="warning">Contact Us</a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev" carousel-indicator-hit-area-height="1px">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<style>
  .carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 5%;
    padding: 0;
    color: #fff;
    text-align: center;
    background: 0 0;
    border: 0;
    opacity: .5;
    transition: opacity .15s ease;
    height: 94%;
}
</style>
<style>
  body{
    background-color: #f35e04;
  }
  nav{
    color:skyblue;
  }
</style>  
  </body>
</html>