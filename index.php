<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tech Cloud SOLUTIONS</title>
      <meta charset="utf-8">
      <!-- Latest compiled and minified CSS starting-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Eagle+Lake" rel="stylesheet">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
            <!-- Latest compiled and minified CSS closing -->
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        margin: 0px;
         width: 100%;
     }
    ul#myNav li{
      background-color:white;
      text-align:center;
    }
    ul#myNav li:hover{
      background-color:#90CAF9;
      color:white;
    }
    </style>
  </head>
<body>
<div class="container-fluid">
   <div class="row" style="position:fixed;z-index:10;width:100%;background-color:white;">
	  <div class="col-md-3 col-md-offset-1" style="padding-top:20px;padding-left:50px;">
	   <img src="img/logo.jpg" alt="logo" width="100" height="50">
	  </div>
	  <div class="col-md-5 col-md-offset-3" style="padding-top:20px;">
  		<nav class="navbar navbar-default" style="background-color:white;padding-left:50px;border-color:white;">
  		    <ul id="myNav" class="nav navbar-nav">
  		      <li><a href="#"><b style="font-size:17px;">Home</b></a></li>
            <li><a href="#products"><b style="font-size:17px;">Products</b></a></li>
  				  <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" h15f="#services"><b style="font-size:17px;">Services</b><span class="caret"></span></a>
			        <ul class="dropdown-menu">
                <li><a href="business.html">BUSINESS CONSULTING</a></li>
                <li><a href="desining.html">DESIGNING</a></li>
                <li><a href="training.html">TRAINING</a></li>
                <li><a href="cloud.html">CLOUD SOLUTIONS</a></li>
			        </ul>
  			    </li>
  		      <li><a href="#contactus"><b style="font-size:17px;">Contact</b></a></li>
  		    </ul>
  	    <nav>
  	  </div>
	 </div>
   <?php
   if (isset($_GET['message'])) {
     echo "<div style='color:white;z-index:15;' class='alert alert-success'>".
       $_GET['message']."
     </div>";
   }
   ?>
    <div style="height:90px;background-color:black;"></div>
    <div class="container-fluid">
      <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <p style="position:absolute;top:250px;left:120px;z-index:10;background-color:rgba(0,0,0,0.5);height:60px;color:white;padding:5px;font-family: 'Merriweather', serif;font-size:25px;line-height:1.4;width:47%;height:150px;text-align:center;">BUSINESS<br>
               <span style="font-size:17px;">Consultant Tech cloud Block defines a consultant as "someone who has influence over an individual, group, or organization, but who has no direct authority to implement changes.</span></p>
              <img src="img/home.jpg" alt="home" style="width:100%;height:550px;">
            </div>
            <div class="item">
              <p style="position:absolute;top:50px;left:120px;z-index:10;background-color:rgba(0,0,0,0.5);height:60px;color:white;padding:5px;font-family: 'Merriweather', serif;font-size:25px;line-height:1.4;width:47%;height:150px;text-align:center;">DESIGNING<br>
               <span style="font-size:17px;">Tech cloud solution is a Professional web designing and web development company bangalore, which is offers a full facility for designing a website at a reasonable price.</span></p>
              <img src="img/home4.jpeg" alt="home" style="width:100%;height:550px;">
            </div>
            <div class="item">
              <p style="position:absolute;top:400px;left:120px;z-index:10;background-color:rgba(0,0,0,0.5);height:60px;color:white;padding:5px;font-family: 'Merriweather', serif;font-size:25px;line-height:1.4;width:47%;height:100px;text-align:center;">
               <span style="font-size:17px;padding-top:60px;">The online and event platform connecting African talent across the world with employers for brand-building, insight and recruitment across all levels.</span></p>
              <img src="img/home2.jpg" alt="home2" style="width:100%;height:550px;">
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="row" id="products" style="background-color:#ECEFF1;">
        <div class="col-md-10 col-md-offset-1" style="padding-top:120px;text-align:center;">
          <p style="font-family: 'Merriweather', serif;text-align:center;font-size:20px;">PRODUCT & SERVICES</p>
          <div class="row" style="padding-top:40px;padding-bottom:40px;">
            <div class="col-md-3">
              <a href="business.html"><spam style="color:black">BUSINESS CONSULTING</spam></a><br><br>
              <i class="fa fa-desktop fa-3x" aria-hidden="true" style="color:#00BCD4;"></i><br><br>
              <p>Consultant Tech cloud Block defines a consultant as "someone who has influence over an individual, group, or organization, but who has no direct authority to implement changes.</p>
            </div>
            <div class="col-md-3">
              <a href="desining.html"><spam style="color:black;">DESIGNING</spam></a><br><br>
              <i class="fa fa-film fa-3x" aria-hidden="true" style="color:#00BCD4;padding-left:10px"></i><br><br>
              <p>Tech cloud solution is a Professional web designing and web development company bangalore, which is offers a full facility for designing a website at a reasonable price.</p>
            </div>
            <div class="col-md-3">
              <a href="training.html"><spam style="color:black;">TRAINING</spam></a><br><br>
              <i class="fa fa-graduation-cap fa-3x" aria-hidden="true" style="color:#00BCD4;"></i><br><br>
              <p>Our lists of top training companies are based on extensive research, interactions with companies around the world, and thorough analysis of the capabilities, experience, and expertise of hundreds of learning organizations</p>
            </div>
            <div class="col-md-3">
              <a href="cloud.html"><spam style="color:black;">CLOUD SOLUTIONS</spam></a><br><br>
              <i class="fa fa-cloud fa-3x" aria-hidden="true" style="color:#00BCD4;padding-left:20px;"></i><br><br>
              <p>Lending Technology Platform
Cloud Lending Inc. is leading innovations in addressing the technology needs of the financial services industry.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="contactus">
        <p style="font-family: 'Cormorant SC', serif;text-align:center;font-size:30px;padding-top:100px;">CONTACT US</p>
        <div class="col-md-5 col-md-offset-1" style="padding-top:60px;">
          <!-- Google Maps -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62211.94410620974!2d77.6902201926257!3d12.956071954709662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae13755f461de7%3A0x9ff76839ebbeaae1!2sCentral!5e0!3m2!1sen!2sin!4v1498036232980" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>          <!-- Google Maps -->
        </div>
        <div class="col-md-6" style="padding-top:35px;">
          <h2>Send us your Query</h2>
          <form action="insert.php" onsubmit="return validateForm();" method="post">
            <input type="text" name="fname" required placeholder="Your Name" style="height:40px;width:400px;"><br><br><br>
            <input type="email" name="email" required placeholder="Your E-Mail" style="height:40px;width:400px;"><br><br><br>
            <input type="text" name="phone" required placeholder="Your Mobile" maxlength="10" style="height:40px;width:400px;"><br><br><br>
            <textarea rows="4" cols="50" name="Message" required placeholder="Message"></textarea><br><br><br>
            <input type="submit" value="Submit Button" style="background-color:#337AB7;width:150px;height:40px;color:white;border-radius:20px;">
          </form>
        </div>
      </div>
      <div class="row" style="background-color:#212121;color:white;height:380px;">
        <div class="col-md-3 col-md-offset-1" style="padding-bottom:20px;">
          <p style="font-family: 'Merriweather', serif;font-size:20px;padding-left:140px;padding-top:40px;">CONTACTUS</p>
          <div class="row">
            <div class="col-md-2">
              <i class="fa fa-map-marker fa-2x" aria-hidden="true" style="padding-left:70px;padding-top:20px;color:#43A047;"></i>
              <i class="fa fa-phone fa-2x" aria-hidden="true" style="padding-left:65px;padding-top:115px;color:#43A047;"></i>
              <i class="fa fa-envelope-o fa-2x" aria-hidden="true" style="padding-left:65px;padding-top:35px;color:#43A047;"></i>
            </div>
            <div class="col-md-10">
              <h4 style="padding-left:50px;font-family: 'Bubbler One', sans-serif;font-size:15px;padding-top:10px;line-height:1.4;color:#9E9E9E;">No.26,2ndfloor,krishnailaya<br>
                munireddy layout,<br>
                near bangalor centralmall,<br>
                Bangalore, Karnataka - 560037,<br>
                India - Asia.<br><br>
                8147252966<br><br><br>
                pavankumar@gmail.com
              </h4>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="padding-top:25px;">
          <h3 style="padding-left:150px;font-family: 'Merriweather', serif;font-size:18px;"><b>SOCIAL<b></h3><br>
            <div style="padding-left:150px;">
              <a href="https://www.facebook.com/"<i class="fa fa-facebook-official fa-2x" aria-hidden="true" style="padding:5px;"></i></a>
              <a href="https://plus.google.com/collections/featured"<i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
              <a href="https://in.linkedin.com/"<i class="fa fa-linkedin fa-2x" aria-hidden="true" style="padding:5px;"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <h3 style="padding-left:70px;font-family: 'Merriweather', serif;font-size:18px;padding-top:20px;"><b>SERVICES<b></h3><br>
              <ul style="line-height:2.4;padding-left:80px;color:#9E9E9E;">
                <li><a href="business.html"><spam style="color:#9E9E9E;">BUSINESS CONSULTING</spam></a></li>
                <li><a href="desining.html"> <spam style="color:#9E9E9E;">DESIGNING</spam></a></li>
                <li><a href="training.html"><spam style="color:#9E9E9E;">TRAINING</spam></a></li>
                <li><a href="cloud.html"><spam style="color:#9E9E9E;">CLOUD SOLUTIONS</spam></a></li>
                <li><a href="login.php"><span style="color:#9E9E9E;">LOGIN</span></a></li>
              </ul>
            </div>
          </div>
          <div class="row" style="background-color:#212121;text-align:center;">
            <p style="font-size:17px;color:#9E9E9E;">Copyright 2017 @ ABC Pvt Ltd</p>
          </div>
    </div>
</div>
</body>
<script>
function fun()
{
  alert('your message has been sent');
}
</script>
</html>
