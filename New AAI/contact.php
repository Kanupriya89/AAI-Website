<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
 
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 1.0;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  
  
  
  
  .carousel-inner img {
   
    width: 100%; /* Set width to 100% */
    margin: auto;
}

.carousel-caption h3 {
    color: #fff !important;
}

@media (max-width: 600px) {
    .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
}



.navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.9;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
    background-color: red !important;
}



footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
}

footer a {
    color: #f5f5f5;
}

footer a:hover {
    color: #777;
    text-decoration: none;
}
p2{
{
    font-size: 40px;
}
  </style>
</head>
<body background="newbanner.jpg">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">AAI Magazine</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="band.html">HOME</a></li>
        <li><a href="advert.html">Advertisement</a></li>
        <li><a href="#tour">E-Magazine</a></li>
        <li><a href="archives.html">Archives</a></li>
		<li><a href="about.html">About us</a></li>
		<li><a href="contact.html">Contact us</a></li>
      
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>




<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="h3.jpg" alt="New York">
      <div class="carousel-caption">
        
      </div> 
    </div>

    <div class="item">
      <img src="h2.jpg" alt="Chicago">
      <div class="carousel-caption">
        
      </div> 
    </div>

    <div class="item">
      <img src="h1.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br><br>
  <br><br>
<p style="font-size:20px;"><b><u>Contact us</b></u></p>
<br><br><br>






<div class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We are ready to help you!</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>Any Query? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Trendsetter Marketing
1st Floor, Pratap Bhawan, 5, Bahadur Shah Zahar Marg,
New Delhi - 110002
</p>
      <p><span class="glyphicon glyphicon-phone"></span>Fax :      +91-1123319061</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email : durbarganguly@gmail.com</p> 
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
		<form method="post" action="contact.php">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <input type="text" class="form-control" id="comments" name="comments" placeholder="Comment">
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>

      </div> 
    </div>
  </div>
</div>
<?php include 'connection.php';?>



<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Airport Authority of India
  </p> 
</footer>

<script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>

</body>


</html>





















































































































































































































