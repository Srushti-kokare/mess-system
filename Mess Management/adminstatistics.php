<!DOCTYPE html>
<html lang="en">

<?php  
include('connection.php');
?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

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
td:hover {background-color:#f5f5f5;}

.th{
    font-size: 20px;
    background-color: gray;
}
#div1
{
    height: 300px;
    width: 600px;
    overflow: scroll;
    
}



</style>
</head>
    <?Php
include('admin_header.php');
?>
<body>
<form style="width: 100%" action="" name="admininfo" method="POST" onsubmit="validateform()">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">

                <div class="card-heading">
                    <h2 class="title">Feedback statstics Form</h2>
                </div>

                <div class="card-body">
                    <div class="form-row">
       

        <?php

            require 'connection.php';
            $query1 = "SELECT CAST(AVG(quality)AS DECIMAL(10,2)) AS 'quality' FROM feedback";
            $result1 = mysqli_query($conn,$query1);
            $query2 = "SELECT CAST(AVG(cleanliness)AS DECIMAL(10,2)) AS 'cleanliness' FROM feedback ";
            $result2 = mysqli_query($conn,$query2);
            $query3 = "SELECT CAST(AVG(staff_service) AS DECIMAL(10,2))AS 'staff_service' FROM feedback ";
            $result3 = mysqli_query($conn,$query3);
            $query4 = "SELECT CAST(AVG(service_speed) AS DECIMAL(10,2))AS 'service_speed' FROM feedback ";
            $result4 = mysqli_query($conn,$query4);
            $query5 = "SELECT CAST(AVG(env) AS DECIMAL(10,2)) AS 'env' FROM feedback ";
            $result5 = mysqli_query($conn,$query5);
            
        ?>
        <table class = "table table-bordered" style = "background-color:white;">
            <thead class ="table-dark">

                <tr>

                    <th>Quality</th>
                    <th>Cleanliness</th>
                    <th>Staff service</th>
                    <th>Service speed</th>
                    <th>Environment</th>
                    
                </tr>                
            </thead>
            <tbody>
            <?php 
                while($row = mysqli_fetch_array($result1))
                {
            ?>
                <tr>
                    <td><?php echo $row['quality']?></td>
                    
                
            <?php
            }
            ?>

            <?php 
                while($row = mysqli_fetch_array($result2))
                {
            ?>
        
                    <td><?php echo $row['cleanliness']?></td>
                    
            <?php
            }
            ?>


            <?php 
                while($row = mysqli_fetch_array($result3))
                {
            ?>
                
                    <td><?php echo $row['staff_service']?></td>
                    
                
            <?php
            }
            ?>


            <?php 
                while($row = mysqli_fetch_array($result4))
                {
            ?>
                
                    <td><?php echo $row['service_speed']?></td>
                    
                
            <?php
            }
            ?>


            <?php 
                while($row = mysqli_fetch_array($result5))
                {
            ?>
                
                    <td><?php echo $row['env']?></td>
                </tr>   
                
            <?php
            }
            ?>
        </table> 
        </tbody>          
    </div>        
</div>

 <div class = "container">
    <div class = "jumbotron">
        <h2>Student Feedback</h2>
        <hr>
    
        <?php
             require 'connection.php';
             $query = "SELECT * FROM feedback ORDER BY `record_id` DESC ";
             $query_run = mysqli_query($conn, $query);
        ?>
        <div id="div1">
        <table  class = "table table-bordered table-fixed" style = "background-color:white;">
            <thead class ="table-dark">
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Quality</th>
                    <th>Cleanliness</th>
                    <th>Staff service</th>
                    <th>Service speed</th>
                    <th>Environment</th>
                    <th>Suggestion</th>
                </tr>
                
            </thead>
        </div>
       . 
    <?php
             if($query_run)
             {
                while($row = mysqli_fetch_array($query_run))
                {
                    

                    ?>

                    <tbody>
                        <tr>

                            <!-- <th><?php echo $row['id']; ?></th> -->
                            <th><?php echo $row['quality']; ?></th>
                            <th><?php echo $row['cleanliness'];?></th>
                            <th><?php echo $row['staff_service'];?></th>
                            <th><?php echo $row['service_speed'];?></th>
                            <th><?php echo $row['env'];?></th>
                            <th><?php echo $row['suggestion'];?></th>
                            
                        </tr>
                    </tbody>
                  
                    <?php  
                  
                }
             }
             else
             {
                    echo "error";
             }
        ?> 
    </table>
</div>
</div>
</div>
</div>
</div>


</body>
</html>

