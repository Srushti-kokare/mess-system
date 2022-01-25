<!-- <?php
session_start();
echo $_SESSION['user_id'];
 ?> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>Reports</title>
    <style media="screen">
    .btn {
      display: inline-block;
      line-height: 20px;
      padding: 5 10px;
      -webkit-transition: all 0.4s ease;
      -o-transition: all 0.4s ease;
      -moz-transition: all 0.4s ease;
      transition: all 0.4s ease;
      cursor: pointer;
      font-size: 15px;
      text-transform: uppercase;
      font-weight: 800;
      color: #fff;
      font-family: inherit;
      width:60px;

    }
    .btn--radius-2 {
      -webkit-border-radius: 1px;
      -moz-border-radius: 1px;
      border-radius: 1px;
    }
    .btn--pill {
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
    }
    .btn--blue {
      background: #4272d7;
    }

    .btn--blue:hover {
      background: #3868cd;
    }
    </style>

  </head>
  <body>
    <div class="container">
      <div class="wrapper"><br><br>
        <h1 align="center">ADMIN REPORT</h1>
      </div><br><br>
      <form action="" method="POST">
        <div class="data" align="center" width="50%">
        <input type="text" name="reg_id" value="">
        <input type="submit" name="submit1" value="Search"/>
      <br><br><br><br>
        <?php
        include('connection.php');
        if(isset($_POST['submit1']))
        {
          // $id =$_SESSION['user_id'];
          $id1=$_POST['reg_id'];
          $query = "SELECT * FROM `tbl_registrations` WHERE id ='".$id1."'";
          $result = mysqli_query($conn,$query);
          if($row = mysqli_fetch_array($result))
          {
            ?>
              <table>
                <tr>
                  <th>STUDENT NAME:<td><?php echo $row['user_name'];?></td></th>
                    <th><td>&nbsp;</td> </th></div>
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

                     <input type="submit" name="filter" id="filter" value="Filter"/>
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

  $id=$_SESSION['user_id'];
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
    }}
else{
echo "<tr> <td colspan='6'>NO records found</td></tr>";
}}
?>
</form>
</table>
<br><br><br><br>
<div class="text-center">
  <a href="print.php" class="btn btn--radius-2 btn--blue">Print</a>
  <a href="print.php" class="btn btn--radius-2 btn--blue">Save in pdf</a>
</div>
</div>
</body>
</html>
