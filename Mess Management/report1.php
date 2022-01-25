<?php
session_start();
echo $_SESSION["user_id"];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>Reports</title>

  </head>
  <body>
    <div class="container">
      <div class="wrapper"><br><br>
        <h1 align="center">STUDENT REPORT</h1>
      </div><br><br>
      <form action="" method="get">
        <div class="data" align="center" width="50%">
        <input type="text" name="id" value="<?php echo $_SESSION["user_id"]; ?>">
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
                    <th><td>&nbsp;</td> </th>
                  <th>ROLL NO:<td><?php echo $row['stud_rollno'];?></td></th>
                </tr>
                <tr >
                  <th>RFID NO:<td><?php echo $row['Rfid'];?></td></th>
                  <th><td>&nbsp;</td> </th>
                  <th>CLASS:<td><?php echo $row['class'];?></td></th>
                </tr>
              </table><br><br><br>

              <?php
          }
          else
          {
            echo "no record found";
          }

        }//std info fetching done.

      ?>
    </form>


    <form method="post">
                <div>
                     <input type="date" name="joining_date" id="start"/>  TO

                     <input type="date" name="cur_date" id="end"/>

                     <input type="submit" name="filter" id="filter" value="filter"/>
                      <br><br><br><br>

                     <table border="1" align="center" width="50%" height="5%" class="order_table">
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
  echo $start."  to  ".$end;

  $id=$_SESSION["user_id"];
  $query="SELECT * FROM choice WHERE curr_date >='".$start."' AND curr_date<='".$end."' and s_id='".$id."'";//THE END DATE FOR TODAY NOT WORKING
  // print_r($query);
  $result = mysqli_query($conn, $query);
  // print_r($result);
  if(mysqli_num_rows($result)>0){

    while($row1=mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo "<td>".$row1['id']."</td>";

      echo "<td>".$row1['curr_date']."</td>";

      echo "<td>".$row1['morning']."</td>";

      echo "<td>".$row1['lunch']."</td>";

      echo "<td>".$row1['evening']."</td>";

      echo "<td>".$row1['dinner']."</td>";
      echo "</tr>";
      // echo "<tr>";//for calculation of each wisely.
      //
      //
      //
      // echo "</tr>";
    }
  }
  else{
echo "<tr> <td colspan='6'>NO records found</td></tr>";
  }
  // while($row = mysqli_fetch_assoc($result))
  // {
  //   echo "
  //   <tr>
  //                              <td>".$row['id']."</td>
  //                              <td>".$row['curr_date']."</td>
  //                              <td>".$row['morning']."</td>
  //                              <td>".$row['lunch']."</td>
  //                              <td>".$row['evening']."</td>
  //                              <td>".$row['dinner']."</td>

  //                        </tr>
  //   ";
  // }
}
?>
</table>
<br><br><br><br>
</div>
</body>
</html>
<!-- NOTE:
1.pagination to Report.
2.print of Report in pdf form.
3.report form for admin.
4.reports of all student.
5.calculation for report. -->
