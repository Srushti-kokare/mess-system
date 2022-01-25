
<!DOCTYPE html>
<html lang="en">

<?php  
include('connection.php');
include ('session.php');

?>

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
<style>
    .dashboard{
    display: none;
    }
    .footer{
        display:none;
    }
    </style>
    </head>

<body align="center">  
    <?php  
    include ('student_dashboard.php');
    ?>
<form style="width: 100%" action="" name="admininfo" method="POST" onsubmit="validateform()">
    <?php

        $query="SELECT * FROM `tbl_registrations` WHERE id='".$_SESSION["user_id"]."'";
        $result=mysqli_query($conn,$query);
        if($row=mysqli_fetch_assoc($result));
        {
         ?>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Feedback Form</h2>
                </div>
                   <div class="card-body">
                        

                         <div class="form-row">
                            <div class="name">Food Quality : </div>
                            <div class="value">
                                <div class="input-group">
                                <label class="radio-container">Excellent
                                    <input type="radio" name="food quality" value="5">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Good
                                    <input type="radio" name="food quality" value="4">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Average
                                    <input type="radio" name="food quality" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Neutral
                                    <input type="radio" name="food quality" value="2">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Dissatisfied
                                    <input type="radio" name="food quality" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="name">Cleanliness :</div>
                            <div class="value">
                                <div class="input-group">
                                <label class="radio-container">Excellent
                                    <input type="radio" name="clean" value="5">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Good
                                    <input type="radio" name="clean" value="4">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Average
                                    <input type="radio" name="clean" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Neutral
                                    <input type="radio" name="clean" value="2">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Dissatisfied
                                    <input type="radio" name="clean" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="name">Staff Service : </div>
                            <div class="value">
                                <div class="input-group">
                                <label class="radio-container">Excellent
                                    <input type="radio" name="service" value="5">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Good
                                    <input type="radio" name="service" value="4">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Average
                                    <input type="radio" name="service" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Neutral
                                    <input type="radio" name="service" value="2">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Dissatisfied
                                    <input type="radio" name="service" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                     <div class="form-row">
                            <div class="name">Service Speed : </div>
                            <div class="value">
                                <div class="input-group">
                                <label class="radio-container">Excellent
                                    <input type="radio" name="speed" value="5">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Good
                                    <input type="radio" name="speed" value="4">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Average
                                    <input type="radio" name="speed" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Neutral
                                    <input type="radio" name="speed" value="2">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Dissatisfied
                                    <input type="radio" name="speed" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                   
                     <div class="form-row">
                            <div class="name">Enviornment :</div>
                            <div class="value">
                                <div class="input-group">
                                <label class="radio-container">Excellent
                                    <input type="radio" name="enviornment" value="5">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Good
                                    <input type="radio" name="enviornment" value="4">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Average
                                    <input type="radio" name="enviornment" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Neutral
                                    <input type="radio" name="enviornment" value="2">
                                    <span class="checkmark"></span>
                                </label>
                                 <label class="radio-container">Dissatisfied
                                    <input type="radio" name="enviornment" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="name">Your Suggestion</div>
                                <div class="value">
                                     <div class="input-group">
                                       <textarea rows="4" cols="50" name="comment" placeholder="Enter Text Here..."></textarea>
                                       
                                    </div>
                                 </div>
                            </div>
                  
                        <div align="center">
                            <input class="btn btn--radius-2 btn--green" type="submit" name="reg" value="Submit">
                            <input class="btn btn--radius-2 btn--red" type = "reset" value="Cancel">        
                        </div>
                        <?php

                    }
                    ?>
                        </form>


   
                </div>
            </div>
        </div>
    </div>

<?php
        include('connection.php');

        if(isset($_POST['submit']))
        {

        $_SESSION["user_id"]=$row["id"];
        $quality=$_POST['food_quality'];
        $cleanliness=$_POST['clean'];
        $service=$_POST['service'];
        $staff_speed=$_POST['speed'];
        $env=$_POST['enviornment'];
        $sugg=$_POST['comment'];
        $curr_date=date('y-m-d');
        $Average=  ($quality+$cleanliness+$service+$staff_speed+$env)/5;
                

        $query="INSERT INTO feedback(`id`,`quality`, `cleanliness`, `staff_service`, `service_speed`,
         `env`, `suggestion`,`average`,`curr_date`) VALUES( '".$_SESSION["user_id"]."','".$quality."','".$cleanliness."',
          '".$service."','".$staff_speed."','".$env."','".$sugg."','".$Average."','".$curr_date."')";
          
        
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
<!-- end document-->
