<?php
include ('connection.php');
include ('session.php');
if(isset($_POST['updatep']))
{
      if($_POST['role']=='student')

{
    
    $prn=$_POST['prn'];
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $add1 =$_POST['address1'];
    $city=$_POST['city'];
    $Email=$_POST['email'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $mblno=$_POST['mblno'];
    $class=$_POST['cls'];
     $dep=$_POST['department'];
     $semister=$_POST['semester'];
     $Adharno=$_POST['aadhar_no'];
     $Gender=$_POST['gen'];
     $Student_fee=$_POST['stud_fee'];
     $RFID=$_POST['rfid'];

       $sql="UPDATE `tbl_registrations` SET `stud_prn`='".$prn."',`user_name`='".$name."',
    `stud_rollno`='".$rollno."',`address`='".$add1."',`city`='".$city."',`email`='".$Email."',`mbl_no`='".$mblno."',`class`='".$class."',`department`='".$dep."',`state`='".$state."',`pin_code`='".$pincode."',`semester`='".$semister."',`aadhar_no`='".$Adharno."',`gender`='".$Gender."',`stud_fee`='".$Student_fee."',`Rfid`='".$RFID."',`type`='student'  WHERE `id`='".$_SESSION["user_id"]."'";;

  // echo "<script>alert(".$sql.");</script>";




    $result=mysqli_query($conn,$sql);
    //print_r($result);
    if($result)
    {
        echo "<script>alert('Record Updated')</script>";
     header("location:profile.php");
     exit();

    }
    else
    {
        echo "<script>alert('Error')</script>";

    }
    

}

     // $result=mysqli_query($conn,$query) or die(mysqli_error($conn));

     //            if ($result)
     //            {
     //              echo "<script> alert('inserted Succesfully');
     //                    </script>";
     //                    header("location:profile.php");
     //                    exit();

     //            }
     //            else
     //            {
     //              echo "<script> alert('error')</script>";
     //            }

     //        }

        if ($_POST['role']=='admin')
        {

        $Name=$_POST['name'];
        $Email=$_POST['email'];
        $mblno=$_POST['mblno'];
        //$Gender=$_POST['gen'];

        $sql="UPDATE `tbl_registrations` SET `user_name`='".$Name."',`email`='".$Email."',
        `mbl_no`='".$mblno."',`type`='Admin' 
        WHERE `id`='".$_SESSION["user_id"]."'";
        

        $result=mysqli_query($conn,$sql);
        //print_r($result);
        if($result)
        {
            echo "<script>alert('Record Updated')</script>";
            header("location:admin_profile.php");
        }
        else
        {
            echo "<script>alert('Error')</script>";

        }
   }

   
 }

?>