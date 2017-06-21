<!DOCTYPE html>
<html>
<body style="text-align:center;">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>CASE STUDY</title>
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
        margin: auto;
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
      		      <li><a href="index.php"><b style="font-size:17px;">Home</b></a></li>
                <li><a href="index.php#products"><b style="font-size:17px;">Products</b></a></li>
      				  <li class="dropdown">
    			        <a class="dropdown-toggle" data-toggle="dropdown" h15f="#services"><b style="font-size:17px;">Services</b><span class="caret"></span></a>
    			        <ul class="dropdown-menu">
                    <li><a href="business.html">BUSINESS CONSULTING</a></li>
                    <li><a href="desining.html">DESIGNING</a></li>
                    <li><a href="training.html">TRAINING</a></li>
                    <li><a href="cloud.html">CLOUD SOLUTIONS</a></li>
    			        </ul>
      			    </li>
      		      <li><a href="index.php#contactus"><b style="font-size:17px;">Contact</b></a></li>
      		    </ul>
      	    <nav>
      	  </div>
    	 </div>
     </div><br><br>

     <div style="height:100px;"></div>
     <div style="text-align:center;">Welcome, <?php session_start(); echo $_SESSION['user']; ?></div>
     <?php
     $servername = "localhost";
     $username = "root";
     $password = "mydb";
     $dbname = "casestudy";

     // Create connection
     $conn = mysqli_connect($servername, $username, $password, $dbname);
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }

     //Function to dispaly the Head of the Table
     	function table_head(){
     		print"<table border='2' cellspacing='0' cellpadding='8' align='center' width='75%'>";
     		print"<tr>
     		<th align='center'> Person Id </th>
     		<th align='center'> Name </th>
     		<th align='center'> Email </th>
     		<th align='center'> Mobile </th>
     		<th align='center'> Message </th>
     		</tr>";
     	  }

     	//Function to display the contents of the table
         function table_con($res){

        }

        table_head();
        $sql = "SELECT PersonID, name, email,mobile,message FROM contact";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
               //  echo "id: " . $row["PersonID"]. " - Name: " . $row["name"]. " " . $row["email"]. " " . $row["mobile"]. " " . $row["message"]. "<br>";
                print"
               <td align='center'>".$row["PersonID"]."</td>
               <td align='center'>".$row["name"]."</td>
               <td align='center'>".$row["email"]."</td>
               <td align='center'>".$row["mobile"]."</td>
               <td align='center'>".$row["message"]."</td>
               </tr>
               ";
             }
             print"</table>";
        } else {
            echo "0 results";
        }

     mysqli_close($conn);
     ?>
       <span id = "result"></span>
       <div class="row" style="background-color:#212121;color:white;height:380px;margin-top:25px;">
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
                 <li><a href="logout.php"><span style="color:#9E9E9E;">LOGOUT</span></a></li>
               </ul>
             </div>
           </div>
           <div class="row" style="background-color:#212121;text-align:center;">
             <p style="font-size:17px;color:#9E9E9E;">Copyright 2017 @ ABC Pvt Ltd</p>
           </div>
</body>
</html>
