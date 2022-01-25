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
 <!-- for table  -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

<body align="center">  
<form style="width: 100%" action="" name="admininfo" method="POST" onsubmit="validateform()">
     
 <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Admin Feedback Form</h2>
                </div>
                   <div class="card-body">
                     <div class="form-row">
                         
                          <div class="input-group">
                                <label class="radio-container">Feedback Basis
                                    <input type="radio" name="food quality" value="5">
                                    <span class="checkmark"></span>
                                </label>
                                    <br>
                                    <br>
                                    <br>
                         <div class="input-group">
                                <label class="radio-container">Average Basis
                                    <input type="radio" name="food quality" value="4">
                                    <span class="checkmark"></span>
                                </label>
                        </div>
                        </div>
                         <div class="col-2_3">

                         </div>

                          <div class="col-2_3">
                            <div class="row row-space">
                            
                                        <div class="rs-select2 js-select-simple select--no-search" >  
                                     <select name="Feedback" id="Feedback" value="Feedback" >
                                                <option disabled="disabled" selected="selected" value="">Choose</option>
                                                <option value="5">Excellent </option>
                                                <option value="4">Good</option>
                                                <option value="3">Average</option>
                                                <option value="2">Nuetral</option>
                                                <option value="1">Dissatisfied</option>
                                           
                                     </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                    </div>
                     <div align='center'>
                    <input class="btn btn--radius-2 btn--green" name="view" type="submit" value="View">
                </div>
                    <div class="form-row m-b-55">
                    
        
                </div> 

                           
                        </form>


                    </div>
                </div>
            </div>
        </div>



<script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    

</body>
</html>
