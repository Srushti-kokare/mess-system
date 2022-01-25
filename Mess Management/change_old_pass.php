<?php

include('session.php');
include ('connection.php');



if ($_SESSION["user_type"]=='student') 
{
   include('student_header.php');
}
else if ($_SESSION["user_type"]=='Admin')
{
  include('admin_header.php');  
}
 else if ($_SESSION["user_type"]=='SAdmin')
{
    include('super_header.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Change Password Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  
</head>
<?php
$id =$_SESSION['user_id'];
if(isset($_POST['change_pass']))
{
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $confirm = $_POST['comfirmpass'];

    if($newpass==$confirm)
    {
    $query = "SELECT password FROM `tbl_registrations` WHERE password = '".$oldpass."' And id='".$id."'";
    $result = mysqli_query($conn,$query);
    //echo $query;
    $num = mysqli_fetch_array($result);

    if($num > 0)
    {
        $update_query = "UPDATE `tbl_registrations` set password = '".$newpass."' WHERE id = '".$id."'";
        $update_result = mysqli_query($conn,$update_query);
      // echo $update_query;

         $_SESSION['msg1'] = "Password Change Successfully";
    }
     else
     {

        $_SESSION['msg1'] = "Old Password Not Match";
     }
}
}
?>

<body>

	  <?php echo $_SESSION['msg1'];?><?php $_SESSION['msg1']=""; ?>
     <form action="" name="studinfo" method="POST" onsubmit="validateform()">

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Change Password</h2>
                </div>
                <div class="card-body">
                    


                        <div class="form-row">
                            <div class="name">Old Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="oldpassword" name="oldpass" id="oldpass">
                                </div>
                            </div>
                        </div>
                        


                        <div class="form-row">
                            <div class="name">New Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="newpassword" name="newpass" id="newpass">
                                </div>
                                <div id ="showerror"></div>

                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Comfirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="cpassword" name="comfirmpass" id="cimfirmpass">
                                </div>
                            <div id ="showerrormsg"></div>
                            </div>
                        </div>
                         
                        <div>
                            
                           <!--  <button class="btn btn--radius-2 btn--green" type="submit" name="change_pass" value="submit" id="change_pass">Change Password</button> -->

                           <!-- <input type="submit" class="btn btn--radius-2 btn--green"name = "updatep" value = "updatep"><br><br> -->
     
                             <input class="btn btn--radius-2 btn--green"name="change_pass" type="submit" value="Change">
                            <input class="btn btn--radius-2 btn--red" name="reset" type="reset" value="Cancel">
                        </div>
                        </div>
                    
                
            </div> 
        </div>
 </div> 
    </form>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
        // v $('#change_pass').prop("disabled",true);
        // var opwd = $("#oldpass").val();
        var pwd = $("#newpass").val();
         var cpwd = $("#cimfirmpass").val();

         $('#cimfirmpass').keyup(function()
         {
            var pwd = $("#newpass").val();
            var cpwd = $("#cimfirmpass").val();

            if(cpwd != pwd)
            {
                $('#showerrormsg').html('Password are not matching');
                $('#showerrormsg').css('color','red');
                return false;
            }
            else
            {
                 $('#showerrormsg').html('');
                return true;
            }

         });
         $('#newpass').keyup(function()
         {
            if(validatePassword())
            {
                $('#showerror').html('');
                return true;
            }
            else
            {
                // $('showerrormsg').html('password not enough strong');
                // return false;
                $('#showerror').html('password not enough strong');
                $('#showerror').css('color','red');
 
                 return false;

            }
            
         });
         
         function validatePassword()
         {
            var pass = $('#newpass').val();
           //use regular expression
            var regpass = /^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*-]).{8,}$/;
            if(regpass.test(pass))
            {
                return true;
            }
            else
            {
                return false;
            }
         }
         
    });

</script>






</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</div>
</div>
</div>
</html>
<!-- end document-->