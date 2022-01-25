<?php
session_start();
// echo $_SESSION["user_id"];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <title>Reports</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper"><br><br>
        <h1 align="center">STUDENT REPORTS</h1>
      </div><br><br>
      <form action="" method="get">
        <div class="data" align="center" width="50%">
        <input type="text" name="id" value="">
        <input type="submit" name="submit" value="Search"/>
      <br><br><br><br>
        <?php
        include('connection.php');
        if(isset($_GET['submit']))
        {
          $id = $_SESSION["user_id"];
          $query = "SELECT * FROM `tbl_registrations` where id ='".$id."'";
          $result = mysqli_query($conn,$query);
          if($row = mysqli_fetch_array($result))
          {
            ?>
                <table>
                <tr>
                  <th>STUDENT NAME:<td><?php echo $row['user_name'];?></td></th>
                  <th>ROLL NO:<td><?php echo $row['stud_rollno'];?></td></th>
                </tr>
                <tr >
                  <th>RFID NO:<td><?php echo $row['rfid'];?></td></th>
                  <th>CLASS:<td><?php echo $row['class'];?></td></th>
                </tr>
              </table><br><br><br>

              <?php
          }
          else
          {
            echo "no record found";
          }
}
        }//std info fetching done.


      ?>
    </form>
    <form method="post">
                <div>
                     <input type="date" name="joining_date" id="start"/>  TO

                     <input type="date" name="cur_date" id="end"/>

                     <input type="submit" name="filter" id="filter" value="filter"  />


                     <table border="1" align="center" width="50%" height="25%" class="order_table">
                   <tr >
                     <th>Sr NO</th>
                     <th>DATE</th>
                     <th>MORNING</th>
                     <th>LUNCH</th>
                     <th>EVENING</th>
                     <th>DINNER</th>

                   </tr>

<?php
include('connection.php');
if(isset($_POST['filter']))
{
  $start=$_POST['joining_date'];
  $end=$_POST['cur_date'];
  $id=$_SESSION["user_id"];
  $query="SELECT * FROM choice WHERE s_id=$id and curr_date between $start AND $end";//THE END DATE FOR TODAY NOT WORKING
  $result = mysqli_query($conn, $query);
  print_r($result);
  while($row = mysqli_fetch_array($result))
  {
    echo "
    <tr>
                               <td>".$row['id']."</td>
                               <td>".$row['curr_date']."</td>
                               <td>".$row['morning']."</td>
                               <td>".$row['lunch']."</td>
                               <td>".$row['evening']."</td>
                               <td>".$row['dinner']."</td>

                         </tr>
    ";
  }
}
?>
</table>
</div><br><br><br>

                              <!-- echo "Ak";
                            ?>
                                <tr>
                               <td><?php echo $row['id'];?></td>
                               <td><?php echo $row['curr_date']?></td>
                               <td><?php echo $row['morning']?></td>
                               <td><?php echo $row['lunch']?></td>
                               <td><?php echo $row['evening']?></td>
                               <td><?php echo $row['dinner']?></td>

                         </tr>
                         <?php

            }}

}
 ?> -->
            <?php
      //take a query for table
             ?>
                 <table border="1" align="center" width="50%" height="25%" class="order_table">
                   <tr >
                     <th>Sr NO</th>
                     <th>DATE</th>
                     <th>MORNING</th>
                     <th>LUNCH</th>
                     <th>EVENING</th>
                     <th>DINNER</th>

                   </tr>
                   <!-- <tr>need to change $row after done query for belowed table wisely -->
                        <!-- <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['cur_date'];?></td>//dates bet the stART TO END SO REMAIN
                              <td><?php echo $row['morning'];?></td>
                              <td><?php echo $row['lunch'];?></td>
                              <td><?php echo $row['evening'];?></td>
                              <td><?php echo $row['dinner'];?></td>
                   </tr> -->


                         <tr>
                           <?php
                           // $query = "SELECT * FROM tbl_registration ORDER BY id desc";
                           $id=$_SESSION["user_id"];
                           $query="SELECT * FROM ckhoice WHERE s_id=$id";
                           $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result))
                            {
                            ?>

                               <td><?php echo $row['id'];?></td>
                               <td><?php echo $row['curr_date']?></td>
                               <td><?php echo $row['morning']?></td>
                               <td><?php echo $row['lunch']?></td>
                               <td><?php echo $row['evening']?></td>
                               <td><?php echo $row['dinner']?></td>

                         </tr>

                        <?php
                            }
                        ?>
                   </div>
         </table>
</form>
      </div>

  </body>
</html>
<!-- <script>
      $(document).ready(function()
     {
           $.datepicker.setDefaults(
               {
                dateFormat: 'yy-mm-dd'
               });
           $(function()
          {
                $("#start").datepicker();
                $("#end").datepicker();
          });
           $('#filter').click(function()
          {
                var start = $('#start').val();
                var end = $('#end').val();
                if(start != '' && end != '')
               {
                     $.ajax(
                    {
                          url:"filter.php",//
                          method:"POST",
                          data:{start:joining_date,end:cur_date},
                          success:function(data)
                          {
                               $('#order_table').html(data);
                          }
                    });
               }
                else
               {
                     alert("Please Select Date");
               }
          });
     });
 </script> -->

<!-- <table border="1" align="center" width="85%">
