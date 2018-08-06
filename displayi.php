<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learnanintern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from (SELECT *FROM abstractsub ORDER BY accyear desc) T where under='1'";
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
.collapsible-body
{
	background-color: #0d2142;
	color: white;
	font-size: 20px;
}
	</style>
</head>
<body class="white">

<!--Navigation bar -->
  <nav class="white" role="navigation" style="box-shadow: none;">
    <div class="nav-wrapper container"> 
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Home</a></li>
    <li><a href="abstractsub.html">Abstract Submission</a></li>
    <li><a href="projectsub.html">Project Submission</a></li>
    <li><a href="viewsub.html">View Submission</a></li>
    <li><a href="faq.html">FAQ</a>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.html">Home</a></li>
    <li><a href="abstractsub.html">Abstract Submission</a></li>
    <li><a href="projectsub.html">Project Submission</a></li>
    <li><a href="viewsub.html">View Submission</a></li>
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
      <a class="carousel-item" href="#"><img src="media/i1.jpg"></a>
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
              
              <?="Problem Statement: " . $row["prob_stmt"]. "<br/><br/> Domain: " . $row["domain"]. "<br/> "?><br>
			  
<!--		 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Details<i class="material-icons right">send</i></button></a><br> -->
<ul class="collapsible popout">
    <li>
      <div class="collapsible-header black-text">Click here to read more</div>
      <div class="collapsible-body"><span>
	  <?="<b>  <i>Name of Group Members: </b>  </i>" . $row["fname"]. ", " . $row["sname"]. ", " . $row["tname"]. "<br/><br/>
	<b>   <i>Email:</b>  </i>" . $row["femail"]. " , " . $row["semail"]. ", " . $row["temail"]. "<br/> <br>
	<b> <i>Contact Number: </i> </b>" . $row["fcontactno"]. " , " . $row["scontactno"]. ", " . $row["tcontactno"]. "<br/> <br>
	<b> <i>	Problem Statement: </i></b>"  . $row["prob_stmt"]. "  <br> <br>
	<b> <i>	Domain:  </i></b>" . $row["domain"]. "  <br> <br>
	<b> <i>	Abstract:  </i></b>" . $row["abs"]. " <br>
		
		
		"?>
	  
	  
	  
	  <br>
	  
	  
	  
	  </span></div>
    </li>
    </ul>             </div>
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
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });        
		  </script>


</body>
</html>