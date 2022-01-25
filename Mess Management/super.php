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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    </head>

</head>
 <body align="center">
     
<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>
    <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>
    <form style="width: 100%" action="" id="form" name="superinfo" method="POST" onsubmit="validateform()">
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Super Admin Registration Form</h2>
                    </div>
                    <div class="card-body">
                        
                        
                            <div class="form-row m-b-55">
                                <div class="name">Name</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2_3">
                                            <div class="input-group-desc">
                                                <input class="input--style-3" type="text" name="txt_firstnm"autocomplete="off" id="txt_firstnm" >
                                                <label class="label--desc">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-2_3">
                                            <div class="input-group-desc">
                                                <input class="input--style-3" type="text" name="txt_middlenm" autocomplete="off" id="txt_middlenm">
                                                <label class="label--desc">Middle name</label>
                                            </div>
                                        </div>
                                        <div class="col-2_3">
                                            <div class="input-group-desc">
                                                <input class="input--style-3" type="text" name="txt_lastnm" autocomplete="off" id="txt_lastnm">
                                                <label class="label--desc">last name</label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="form-row">
                            <div class="name">Email ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="email" name="email" value="" >
                                    <label class="label--desc">Email ID</label>
                                   <span id="availability"></span>
                                </div>
                            </div>
                        </div>


                            <div class="form-row">
                                <div class="name">Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="password" name="password" id="password" autocomplete="off">
                                        <label class="label--desc">Password</label>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Confirm Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="password" name="cpass" id="cpass" autocomplete="off">
                                        <label class="label--desc"> Confirm Password</label>

                                    </div>
                                    <span id="cpass-error"/>
                                </div>
                            </div>
                        
                                    
                            <div align='center'>    
                                <input class="btn btn--radius-2 btn--green" name="submit" type="submit" value="Register" id="btn_reg">
                                <input class="btn btn--radius-2 btn--red" type = "reset" value="Reset">
                            </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Jquery JS-->
    <script src="vendor/jquery/ajax.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <script>
        $(document).ready(function(){

            $('#cpass').on('keyup',function(){
                var pass=$('#password').val();
                if($(this).val()!=pass){
                    $('#cpass-error').text('Password do not match..')
                }
                else{
                    $('#cpass-error').text('')   
                }
            })
            
            $("#btn_reg").on('click',function()
            {
                $("#btn_reg").attr("disabled","disabled");
            var fname=$("#txt_firstnm").val();
            var mname=$("#txt_middlenm").val();
            var lname=$("#txt_lastnm").val();
            var email=$("#email").val();
             var password=$("#password").val();
             if(fname!="" && mname!="" && lname!="" && email!="" && password!="")
             {

             $.ajax({

                url:"super_check.php",
                type:"POST",
                data:
                {
                    fname:fname,//here it was wrong
                    mname:mname,//here it was wrong
                    lname:lname,//here it was wrong
                    email:email,
                    password:password
                },
                cache: false,
                success:function(dataResult)
                {
                    var dataResult=JSON.parse(dataResult);
                    if(dataResult.statusCode==200)
                    {
                        $("#btn_reg").removeAttr("disabled");
                        $('#form').find('input:text').val('');
                        $('#form').find('input:password').val('');
                        alert('Data saved succesfully...');  
                     }
                    else if(dataResult.statusCode==201)
                    {
                        $("#error").show();
                        $('#availability').html('Email id already exits..');
                    
                    }
                    else if(dataResult.statusCode==202){
                        alert('Something went wrong. Data not saved...');
                    }
                }
        });
     }
     else
     {
        alert('Please fill all the fields...');
     }

             
 });
            
 });


    </script>
 
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

