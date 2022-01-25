<html>
   <h1>click to attend</h1>
<?php
session_start();
echo "<tr>";
echo "<h4><label>student ID:</label>";
echo $_SESSION["user_id"];
echo "</tr><br><br>";
 ?>


 <head>

   <title>student input</title>
   <style>
     body{
           margin-top: 15%;
           padding-top: 5%;
           background-color: grey;

         }


   </style>
 </head>
 <body align="center">
 <form class="box" action="" method="post">

       <?php

       date_default_timezone_set('Asia/Kolkata');
       $date1 = date("H:i:sa");//current time is commomn for m,l,e,d .
       echo $date1."<br><br><br><br>";

      $d=mktime(07, 30, 00);//start time for morning
      $date0=date("H:i:sa", $d);
      $d1=mktime(09, 30, 00);//end time for morning
      $date2=date("H:i:sa", $d1);
      // echo $date0 ."-----". $date2."<br>";//echoing morning//end of morning section.

      $l=mktime(12, 00, 00);//start time for lunch
      $date3=date("H:i:sa", $l);
      $l1=mktime(14, 30, 00);//end time for lunch
      $date4=date("H:i:sa", $l1);
      // echo $date3 ."-----". $date4."<br>";//echoing morning//end oflunch section.

      $e=mktime(15, 00, 00);//start time for EVENING
      $date5=date("H:i:sa", $e);
      $e1=mktime(18, 00, 00);//end time for EVENING
      $date6=date("H:i:sa", $e1);
      // echo $date5 ."-----". $date6."<br>";//echoing morning//end of evening section.

      $di=mktime(19, 00, 00);//start time for DINNER
      $date7=date("H:i:sa", $di);
      $di1=mktime(22, 30, 00);//end time for dinner
      $date8=date("H:i:sa", $di1);
      // echo $date7 ."-----". $date8."<br>";//echoing dinner//end of dinner section.

      if ($date1>= $date0 && $date1 <=$date2)
      {?>
        <INPUT TYPE="Radio" name="abc" Value="m" >MORNING  <!--o.w morning field other are disavled -->
        <!-- <INPUT TYPE="Radio" name="abc" Value="" disabled>LUNCH
        <INPUT TYPE="Radio" name="abc" Value="" disabled>EVENING
        <INPUT TYPE="Radio" name="abc" Value="" disabled>DINNER -->
 <?php
 }
          elseif ($date1>= $date3 && $date1 <=$date4)
          {?>
            <!-- <INPUT TYPE="Radio" name="abc"  Value="" disabled>MORNING -->
            <INPUT TYPE="Radio" name="abc"  Value="l">LUNCH  <!--o.w lunch field other are disavled -->
            <!-- <INPUT TYPE="Radio" name="abc"  Value="" disabled>EVENING
            <INPUT TYPE="Radio" name="abc"  Value="" disabled>DINNER -->
 <?php
        }

          elseif ($date1>= $date5 && $date1 <=$date6)
          {?>
            <INPUT TYPE="Radio" name="abc"   Value="" disabled>MORNING
            <INPUT TYPE="Radio" name="abc"   Value="" disabled>LUNCH
            <INPUT TYPE="Radio" name="abc"   value="e" >EVENING   <!--o.w evening field other are disavled -->
            <INPUT TYPE="Radio" name="abc"   Value="" disabled>DINNER
 <?php
          }
          elseif ($date1>= $date7 && $date1 <=$date8)
          {?>
            <!-- <INPUT TYPE="Radio" name="abc"  Value="" disabled>MORNING
            <INPUT TYPE="Radio" name="abc"  Value="" disabled>LUNCH
            <INPUT TYPE="Radio" name="abc"  Value="" disabled>EVENING -->
            <INPUT TYPE="Radio" name="abc"  Value="d" >DINNER  <!--o.w dinner field other are disavled -->

     <?php }else {
       echo "wait for a while";
     }
       ?>
       <button type="submit" name="attendance">Add Attendance</button>

     </form>
 <?php
    include('connection.php');
    if(isset($_POST['attendance']))
    {
    $mor=$_POST['abc'];
    // echo $mor;
    $cur_date=date("y.m.d H:i:sa");
$query1="";
if($mor=="m")
{
  $query1="INSERT into choice(s_id,morning,curr_date)VALUES('".$_SESSION["user_id"]."','p','".$cur_date."')";//we use session_var of login time to keep the records of student in tract bet the login to logout session.the session var is s_id create when session starts.
}elseif ($mor=="l")
{
  $query1="INSERT into choice(s_id,lunch,curr_date)VALUES('".$_SESSION["user_id"]."','p','".$cur_date."')";
}elseif ($mor=="e")
{
  $query1="INSERT into choice(s_id,evening,curr_date)VALUES('".$_SESSION["user_id"]."','p','".$cur_date."')";
}elseif ($mor=="d")
{
  $query1="INSERT into choice(s_id,dinner,curr_date)VALUES('".$_SESSION["user_id"]."','p','".$cur_date."')";
}
echo "::".$_SESSION['user_id'];
echo "<br>:".$query1;
$result1=mysqli_query($conn,$query1) or die(mysqli_error($conn));

if ($result1)
  {
    echo "<script> alert('attendance considered!!');
          </script>";

  }
  else
  {
    echo "<script> alert('something is went wrong')</script>";
  }
}
     ?>
  </body>
</html>
