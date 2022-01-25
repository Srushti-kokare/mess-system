<?php
include ('connection.php');
include ('session.php');
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

    <script type="text/javascript">

    function validateform()
    {
            var flag=0;
            var errmsg="\n";

        var sub = document.forms["studinfo"]["sub"].value;
        var regsub = /^[a-zA-Z. ]{2,}$/;

            if (sub=="")
            {
                errmsg=errmsg+"subject should not be blank \n";   
                flag=1;
            }
            else
            {

               if(regsub.test(sub)==false)
               {
                errmsg=errmsg+"subject must be alphabets, space, dot only \n";
                flag=1;
               }
            }

        var come = document.forms["studinfo"]["comment"].value;
        var regcome = /^[a-zA-Z. ]{2,}$/;

            if (come=="")
            {
                errmsg=errmsg+"complaint box should not be blank \n";   
                flag=1;
            }
            else
            {

               if(regcome.test(come)==false)
               {
                errmsg=errmsg+"complaint must be alphabets, space, dot only \n";
                flag=1;
               }
            }
        
        if(flag==1)
            {
                alert(errmsg);
                return(false);
            }
            return(true);
    }

    </script>
</head>


    <body align="center">  
    <form style="width: 100%" action="" name="studinfo" method="POST" onsubmit="return validateform();">
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Notice</h2>
                    </div>
                <div class="card-body">
                    <div class="form-row m-b-55">
                        <div class="name">DATE :</div>
                            <div class="value">
                                <div class="input-group">
                                    <?php echo "Today is " . date("y-m-d") . "<br>"; echo "Today is " . date("l"); ?>                            
                                 </div>
                            </div>
                        </div>
                    <div class="form-row m-b-55">
                        <div class="name">SUBJECT :</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="sub" placeholder="">
                                </div>
                            </div>
                        </div>
                    <div class="form-row m-b-55">
                        <div class="name">Notice:</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea rows="10" cols="70" name="comment" placeholder="Enter Text Here..."></textarea>
                                 </div> 
                            </div>
                        </div>
                    <div align='center'>
                        <input class="btn btn--radius-2 btn--green" name="submit" type="submit" value="send">
                        <input class="btn btn--radius-2 btn--red" name="reset" type="reset"  value="Cancel">
                    </div>
    </form>
                    </div>
                        </div>
                            </div>
                                </div>
                    
    <?php
    
        include('connection.php');

        if(isset($_POST['submit']))
        {

        $subject=$_POST['sub'];
        $complaint=$_POST['comment'];
        $date=date('y-m-d');
        

        $query="INSERT INTO complaint(`subject`, `complaint`, `curr_date`) VALUES('".$subject."','".$complaint."','".$date."')";
          
        
        $result=mysqli_query($conn,$query) or die(mysqli_error($conn));

        if ($result)
            {
              echo "<script> alert('inserted Succesfully');
                    </script>";

            }
            else
            {
              echo "<script> alert('error')</script>";
            }
        }
    ?>

       <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/datepicker/moment.min.js"></script>
        <script src="vendor/datepicker/daterangepicker.js"></script>
        <!-- Main JS-->
        <script src="js/global.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

