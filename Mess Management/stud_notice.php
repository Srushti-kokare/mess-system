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

    
</head>
<body align="center">  
<form style="width: 100%" action="stud_notice.php" name="studinfo" method="POST" onsubmit="return validateform();">

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Notice</h2>
                </div>
    <div class="card-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="form-row">
                    <div class="form-row m-b-10">
                        <?php
                            $query1 = "SELECT * FROM `notice` ORDER BY `record_id` DESC";
                            $result1 = mysqli_query($conn, $query1);
                            while($row=mysqli_fetch_array($result1))
                            {
                        ?>
    <div class="table ">
        <table class="table table-borderd" border="4" align="center" width="80%" height="30%" class="order_table">
            <tbody>
                <tr>
                    <td align="left" colspan="2" ><h6> <b>NOTICE SUBJECT :</b></h6><?php echo $row['subject'];?></td>

                    <td></td>
                    <td colspan="2"><H6><b> DATE : </b></H6><?php echo $row['curr_date'];?></td>
                                           
                    <td></td>   
                </tr>
                <tr>
                    <td style="width:50px;"  colspan="6" height="150px"><H6><b> NOTICE : </b></H6><?php echo $row['description'];?></td>
                </tr>
            </tbody>
        </table>
    </div>
                        <?php

                            }
                        ?>                          
                                    
                    </div>
                </div>
            </div>
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
        

        $query="INSERT INTO notice(`subject`, `description`, `curr_date`) VALUES('".$subject."','".$complaint."','".$date."')";
          
        
        $result=mysqli_query($conn,$query) or die(mysqli_error($conn));

        if ($result)
            {
              echo "<script> alert('inserted Successfully');
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

