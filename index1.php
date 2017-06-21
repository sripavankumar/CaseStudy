<html>
<head>
</head>
<body>
  <?php
   session_start();
    if (isset($_SESSION['USER'])){
      echo $_SESSION['USER'];
    } else {
      HEADER('Location:login.php');
    }
  ?>
  <a href="logout.php" style="float:right;">Logout</a>

</body>
</html>
