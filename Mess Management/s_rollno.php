<?php
include ('connection.php');

//$query = "SELECT * FROM `stud_table` ORDER BY id desc";  
// $result = mysqli_query($conn, $query);  
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
<div class="form-group row">
      <label for="id">ID</label>
      <input type="text" class="form-control" id="id"  name="id" placeholder="Enter Your id" >
      
    </div><br><br>
 <input type="submit" name="search" value="search" class="btn btn-primary">

</form>





<?php

if(isset($_POST['search']))
{
	$id =$_POST['id'];
	$query="SELECT * FROM `stud_tb` WHERE id=$id";
	$result=mysqli_query($conn,$query);


	while($row = mysqli_fetch_array($result))  
     {                
?>

    <form action="" method="POST">
      <input type="hidden" name="id1" value="<?php echo $id ?>">
	<div class="form-group row">
      <label for="Rollno">Roll No</label>
      <input type="text" class="form-control" id="rollno" value="<?php echo $row["rollno"]; ?>"  name="rollno" placeholder="Enter Roll No" >
      
    </div>
      <br><br>


    <div class="form-group row">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $row["name"]; ?>" name="name" placeholder="Enter Student Name" >
      
    </div>
      <br><br>

        <div class="form-group row">
      <label for="Address">Address</label>
        <input type="text" class="form-control" id="address"  value="<?php echo $row["address"]; ?>" name="address" placeholder="Enter address" >
      
      <br><br>
    </div>

	<div class="form-group row">
      <label for="City ">City </label>
      <input type="text" class="form-control" id="city" value="<?php echo $row["city"];?>" name="city"  placeholder="Enter City">
      
    </div>
    <br><br>


    <div class="form-group row">
      <label for="pincode ">Pin-Code </label>
      <input type="text" class="form-control" id="pincode" value="<?php echo $row["pincode"];?>" name="pin"  placeholder="Enter Pin Code">
      
    </div> 
    <br><br>

    <div class="form-group row">
      <label for="DOB">Date Of Birth</label>
      <input type="date" class="form-control" id="dob" value="<?php echo $row["dob"];?>" name="dob"  placeholder="Enter Date Of Birth" >
     
    </div>
    <br><br>


    <div class="form-group row">
      <label for="Email">Email</label>
      <input type="text" class="form-control" id="email" value="<?php echo $row["email"];?>" name="email" value="" placeholder="Enter Email">
     
    </div>
    <br><br>




    <div class="form-group row">
      <label for="Password">Password</label>
      <input type="Password" class="form-control" id="pass" value="<?php echo $row["password"];?>" name="pass" placeholder="Enter Password">
     
    </div>
    <br><br>

    <div class="form-group row">
      <label for="Mobileno">Mobile No</label>
      <input type="text" class="form-control" id="mblno" value="<?php echo $row["mblno"];?>" name="mblno" placeholder="Enter Mobile No">
     
    </div>
    <br><br>


    <div class="form-group row">
      <label for="Adharcardno">Adhar Card No</label>
      <input type="text" class="form-control" id="aadharno" value="<?php echo $row["aadharno"];?>" name="aadharno" placeholder="Enter Adhar Card No">
     
    </div>
    <br><br>

        Gender:<select>
           <?php
           $sql1="SELECT `gender` FROM `stud_tb` WHERE `id` ='".$id."'";
           $result=mysqli_query($conn,$sql1);

           while($row = mysqli_fetch_array($result))
           {
            ?>
            <?php
            echo "<option value=".$row['gender'].">".$row['gender']."</option>";
           } 

            ?>
         </select><br><br><br>

         State:<select>
           <?php
           $sql1="SELECT `state` FROM `stud_tb` WHERE `id` ='".$id."'";
           $result=mysqli_query($conn,$sql1);

           while($row = mysqli_fetch_array($result))
           {
            ?>
            <?php
            echo "<option value=".$row['state'].">".$row['state']."</option>";
           } 

            ?>
         </select><br><br><br>

         Country:<select>
           <?php
           $sql1="SELECT `country` FROM `stud_tb` WHERE `id` ='".$id."'";
           $result=mysqli_query($conn,$sql1);

           while($row = mysqli_fetch_array($result))
           {
            ?>
            <?php
            echo "<option value=".$row['country'].">".$row['country']."</option>";
           } 

            ?>
         </select><br><br><br>

         Class:<select>
           <?php
           $sql1="SELECT `class` FROM `stud_tb` WHERE `id` ='".$id."'";
           $result=mysqli_query($conn,$sql1);

           while($row = mysqli_fetch_array($result))
           {
            ?>
            <?php
            echo "<option value=".$row['class'].">".$row['class']."</option>";
           } 

            ?>
         </select><br><br><br>


    <div>
   <input type="submit"  name="update" class="btn btn-success" value="update">
   </div>
</form>
 

<?php
}
}
?>

<?php
        if(isset($_POST['update']))
    {
           $id=$_POST['id1'];
           $rollno=$_POST['rollno'];
           $Name=$_POST['name'];
           $Address=$_POST['address'];
           $City=$_POST['city'];




              $Update_query = "UPDATE `stud_tb` SET  `rollno`='".$rollno."', `name`='".$Name."',`address`='".$Address."',`city`='".$City."' WHERE id ='".$id."'";
              $Update_result=mysqli_query($conn,$Update_query);
             // echo "Update_query";
              if($Update_query)
              {
                echo "<script>alert('record updated successfully')</script>";
              }
              else
              {
                 echo "<script>alert('cant update record')</script>";
              }
        }

 ?>

  </body>
</html>