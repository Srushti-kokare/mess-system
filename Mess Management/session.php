  <?php
  session_start();
  if (!$_SESSION['user_id'] || $_SESSION['user_id']=="")
   {
    header("location:login.php");
      exit();
  }
  ?>