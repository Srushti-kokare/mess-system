<?php
include ('connection.php');
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
    <title>Student Profile Form</title>

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

  <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Student Profile</h2>
                </div>
                <div class="card-body">
                      
	<form name = "stud_info" action = "edit_stud_profile.php" method = "POST">
 	
 
 	<div class="form-row m-b-55">
                            <div class="name">PRN</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="prn" id="prn" placeholder="10 digit unique number">
                                            
                                        </div>
                                    </div>
                                    <input class="btn btn--radius-2 btn--green" name="search"type="submit" value="search"><br>
                                    <!-- <button class="btn btn--radius-2 btn--green" type="submit" value="search"></button> -->
                                    <input class="btn btn--radius-2 btn--red" type="submit" value="Cancel">

                                </div>
                            </div>
                        	

     <!-- <input type="submit" class="btn btn--radius-2 btn--green"name = "search" value = "Search"><br><br> -->
     

 </div>
 </div>
 
</form>



    <script type="text/javascript">
        function validateform()
        {
            var flag=0;
            var errmsg="\n";
            

             var prn = document.forms["studinfo"]["p rn"].value;
            var regprn = /^(?=.*[0-9]).{10,}$/;

            if (regprn.test(prn) == false) 
            {
                errmsg=errmsg+"Fill UP PRN No \n";    
                flag=1;
            }
        

            
            // *******************************************************
                     
            if(flag==1)
            {
              alert(errmsg);
              return(false);
            }
       }
      </script>
</head>

<?php
    if(isset($_POST['search']))

    {

    $prn = $_POST['prn'];
    $query = "SELECT * FROM `tbl_registrations` where stud_prn ='".$prn."'";
    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($result))
    {

	?>
<body>

	

    <form action="edit_stud_profile.php" name="studinfo" method="POST" onsubmit="validateform()">

    <!-- <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5"> -->
                <!-- <div class="card-heading">
                    <h2 class="title">Student Profile</h2>
                </div> -->
                <div class="card-body">
                    <!-- <form method="POST"> -->
                        

                        <div class="form-row m-b-55">
                            <div class="name">PRN</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="prn" value = "<?php echo $row['stud_prn'];?>" id="p" placeholder="10 digit unique number">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address1" value = "<?php echo $row['address'];?>" id="add" placeholder="Enter Address">
                                </div>
                                
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="city" name="city" value = "<?php echo $row['city'];?>" id="city" >
                                </div>
                            </div>
                        </div>




                        <div class="form-row">
                            <div class="name">State</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="state" name="state" value = "<?php echo $row['state'];?>" id="state" >
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Pin-Code</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="pincode" name="pincode" value = "<?php echo $row['pin_code'];?>" id="pin" placeholder="6 digit No">
                                </div>
                            </div>
                        </div>


                                               
                        <div class="form-row m-b-55">
                            <div class="name">Mobile No</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <!-- <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code" value="91">
                                            
                                        </div>
                                    </div> -->
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="mblno" value = "<?php echo $row['mbl_no'];?>" id="mbl" placeholder="Mobile Number">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Class Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="class" name="class" value = "<?php echo $row['class'];?>" id="class" >
                                </div>
                            </div>
                        </div>
                        


                        <div class="form-row">
                            <div class="name">Semester</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="semister" name="sem" value = "<?php echo $row['semester'];?>" id="semister" >
                                </div>
                            </div>
                        </div>
                           <div>
                            
                            <button class="btn btn--radius-2 btn--green" type="submit" name="updatep" value="updatep">Update Profile</button>

                           <!-- <input type="submit" class="btn btn--radius-2 btn--green"name = "updatep" value = "updatep"><br><br> -->
     
                            
                            <button class="btn btn--radius-2 btn--orenge" type="submit">Cancel</button>
                        </div>
                        </div>
                    </form>
                
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>



<?php
}
}
?>



</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</div>
</div>
</div>
</html>
<!-- end document-->