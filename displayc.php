<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learnanintern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from (SELECT *FROM abstractsub ORDER BY year desc) T where Branch='computers'";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="LearnAnIntern" content="Project Management; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Welcome to LearnAnIntern</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- JavaScript -->
  <script src="js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

  <style type="text/css">
    .block
    {
      height: 300px ;
      max-width: 90%;
      margin:auto;

    }
    .carousel
    {
      max-height: 100% !important;
    }
    .col
    {
      opacity: 0.9;
    }
    .col:hover
    {
      opacity:1;
    }  
    .title
    {
      max-width: 100%;
      background-color: green;
      height: 300px;
    }
    .img
    {
      width: 100px;
      height: 100px;
    }
    .block2
    {
      max-width: 92%;
      margin: auto;
    }
  </style>
</head>
<body class="white">

<!--Navigation bar -->
  <nav class="white" role="navigation" style="box-shadow: none;">
    <div class="nav-wrapper container"> 
      <!--<a id="logo-container" href="#" class="brand-logo">Logo</a>-->
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Home</a></li>
    <li><a href="abstractsub.html">Abstract Submission</a></li>
    <li><a href="projectsub.html">Project Submission</a></li>
    <li><a href="viewsub.html">View Submission</a></li>
    <li><a href="faq.html">FAQ</a>
    </li> &nbsp &nbsp &nbsp
      <li>                          <!--ADD SEACH ICON-->
        <input type="text" placeholder="SEARCH" id="autocomplete-input" class="autocomplete gray-text center-right" > 
                  </li>      
      </ul>

      <ul id="nav-mobile" class="sidenav">
    <li>                          <!--ADD SEACH ICON-->
        <input type="text" placeholder="SEARCH" id="autocomplete-input" class="autocomplete gray-text center-right" > 
                  </li>      
        <li><a href="homepage.html">Home</a></li>
    <li><a href="abstractsub.html">Abstract Submission</a></li>
    <li><a href="projectsub.html">Project Submission</a></li>
    <li><a href="viewsub.html">View Submission</a></li>
    <li><a href="aboutus.html">About us</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!--carousel content-->
  <script type="text/javascript">
  
  $(document).ready(function(){
    $('.carousel.carousel-slider').carousel({fullWidth: true, indicators: true});
  });  

 
  </script>
  <div class="block">
    <div class="carousel carousel-slider">
      <a class="carousel-item" href="#"><img src="media/1.jpg"></a>
      <a class="carousel-item" href="#"><img src="media/2.jpg"></a>
      <a class="carousel-item" href="#"><img src="media/3.jpg"></a>
    </div>
  </div>


  <!--loops for display-->
  <div class="block2">
  <div class="row">
          <?php while ( $row = $result->fetch_assoc()) { ?>
            <div class="col s12 m6" style="padding:0 20px 0 15px; margin-top: 40px;">
              <div class="card-panel" style="background:url(media/check.jpg);outline:1px solid #e0e0e0;outline-offset:-4px;">
              <i class="material-icons small white-text">label</i>
              <div class="white-text" style="margin: -35px 0 50px 50px;letter-spacing: 2px;font-family: 'Open Sans', sans-serif;"> 
              
              <?="Name: " . $row["fname"]. "<br/> Email: " . $row["email"]. "<br/> Number: " . $row["contactno"]. "<br/> Branch:  ".$row["Branch"]."<br/> Year: " . $row["year"]. "<br/>"?><br><button class=" col s3 offset-s9 btn waves-effect waves-light" type="submit" name="action" data-toggle="modal" data-target="#myModal" >Details<i class="material-icons right">send</i></button><br>

              </div>
              </div>
            </div>
        <?php }?>


        <?php while ( $row = $result->fetch_assoc()) { ?>
            <div class="col s12 m6" style="padding:0 20px 0 15px; margin-top: 40px;">
              <div class="card-panel" style="background:url(media/check.jpg);outline:1px solid white;outline-offset:-4px;">
              <div class="white-text" style="margin: -35px 0 50px 50px;letter-spacing: 2px;font-family: 'Open Sans', sans-serif;"> 

              <?="Name: " . $row["fname"]. "<br/> Email: " . $row["email"]. "<br/> Number: " . $row["contactno"]. "<br/> Branch:  ".$row["Branch"]."<br/> Year: " . $row["year"]. "<br/>"?><br><button class=" col s3 offset-s9 btn waves-effect waves-light" type="submit" name="action" data-toggle="modal" data-target="#myModal" >Details<i class="material-icons right">send</i></button><br>

              </div>
              </div>
            </div>
       <?php }?>
  </div>
  </div>
  <!--footer-->
 <footer class="page-footer #263238 blue-grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h4 class="white-text"><b> <i>KSIEIT-LearnAnIntern</b></i></h4>
          <p class="grey-text text-lighten-4">K. J. Somaiya Institute of Engineering and Information Technology abbreviated as KJSIEIT was established by the Somaiya Trust in the 2001, at Ayurvihar campus, Sion, Mumbai, India. The institute was set up to impart education in the field of Information Technology and allied branches of Engineering and Technology .</p>


        </div>
        <div class="col l3 s12 right">
          <h4 class="white-text"><b> <i>Contact us </b> </i></h4>
          <ul>
            <li><a class="white-text" href="#!"><b> Contact number: </b> <br>022 2406 1408 </a></li>
            <li><a class="white-text" href="#!"><b> Address: </b> Somaiya Ayurvihar Complex, Eastern Express Highway, Near Everard Nagar, Sion East, Mumbai, Maharashtra 400022</a></li>
            
          </ul>
        </div>
        
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">LearnAnIntern Team</a>
      </div>
    </div>
  </footer>


</body>
</html>