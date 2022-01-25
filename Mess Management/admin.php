<!DOCTYPE html>
<html lang="en">
<?php 
include "connection.php";
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

                    </head>

<body align="center">  
<form style="width: 100%" action="" name="admininfo" method="POST" onsubmit="validateform()" id="form">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Admin Registration Form</h2>
                </div>
                   <div class="card-body">
                       <div class="form-row m-b-55">
                          <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2_3">
                                        <div class="input-group-desc">
                                            <input class="input--style-3" type="text" name="txt_firstnm" id="txt_firstnm">
                                            <label class="label--desc">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-2_3">
                                        <div class="input-group-desc">
                                            <input class="input--style-3" type="text" name="txt_middlenm" id="txt_middlenm">
                                            <label class="label--desc">Middle name</label>
                                        </div>
                                    </div>
                                    <div class="col-2_3">
                                        <div class="input-group-desc">
                                            <input class="input--style-3" type="text" name="txt_lastnm" id="txt_lastnm">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                               
                                 <div class="input-group">
                                    <input class="input--style-5" type="text" name="address" id="address">
                                    <label class="label--desc">Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" id="email">

                                    <label class="label--desc">Email ID</label>
                                    <span id="availability"></span>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pass" id="password">
                                    <label class="label--desc">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="cpass" id="cpass">
                                    <label class="label--desc"> Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        
                         <div class="form-row">
                            <div class="name">Mobile Number</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" name="mblno" value="" id="mblno"   maxlength="10">
                                        <label class="label--desc">Mobile Number</label>
                                        <span id="availability1"></span>
                                    </div>
                                </div>
                            </div>    


                
                        <div class="form-row">
                            <div class="name">Food License Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="Licenseno" id="Licenseno">
                                    <label class="label--desc">Food License Number</label>
                                    <span id="availability2"></span>
                                </div>
                            </div>
                        </div>
                        
                    <div align='center'>
                       <input class="btn btn--radius-2 btn--green" name="submit" type="submit" value="register" id="btn_reg">
                        <input class="btn btn--radius-2 btn--red" type = "reset" value="reset">
                    </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/ajax.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script>


       

 $(document).ready(function(){//main func


// Validate Email

    $('form input[name="email"]').blur(function () {
    var email = $(this).val();
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
if (re.test(email)) {
    $('#availability').text('');
    $('.success').show();
} else {
    $('#availability').text('Invalid email..');
    $('.error').show();
}
})



//  validate mobile no

   $('form input[name="mblno"]').blur(function () {
    var mob= $(this).val();
        var re = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
if(re.test(mob)){
    $('#availability1').text('');
    $('.success').show();
} else {
    $('#availability1').text('Invalid Mobile number..');
    $('.error').show();
}  
 })

   // validate food license no

    $('form input[name="Licenseno"]').blur(function () {
    var food= $(this).val();
        var re = /^[0-9]{14}$/;
if(re.test(food)){
    $('#availability2').text('');
    $('.success').show();
} else {
    $('#availability2').text('Invalid food License number..');
    $('.error').show();
}  
 })

 //to chech password and confirm pass
    $('#cpass').on('keyup',function(){
    var pass=$('#password').val();
         if($(this).val()!=pass){
             $('#cpass-error').text('Password do not match..')
                }
        else{
              $('#cpass-error').text('')   
             }
 })
            

            //to check if data already exits or insert data
            $("#btn_reg").on('click',function(){
                $("#btn_reg").attr("disabled","disabled");
            var fname=$("#txt_firstnm").val();
            var mname=$("#txt_middlenm").val();
            var lname=$("#txt_lastnm").val();
            var address=$("#address").val();
            var email=$("#email").val();
             var password=$("#password").val();
             var mblno=$("#mblno").val();
              var Licenseno =$("#Licenseno").val();
              
             if(fname!="" && mname!="" && lname!="" && address!="" && mblno!="" && email!="" && password!=""  && Licenseno!="")
             {

             $.ajax({

                url:"admin_check.php",
                type:"POST",
                data:
                {
                    fname:fname,//here it was wrong
                    mname:mname,//here it was wrong
                    lname:lname,
                    address:address,
                    mblno:mblno,//here it was wrong
                    email:email,
                    password:password,
                    Licenseno:Licenseno
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
                        alert(' Data saved successfully...');  
                     }
                    else if(dataResult.statusCode==201)
                    {
                        
                        $('#availability').html('Email id already exits..');
                    
                    }
                    else if(dataResult.statusCode==202)
                    {
                        
                        $('#availability1').html('Mobile Number already exits..');
                    
                    }
                    else if(dataResult.statusCode==203)
                    {
                        
                        $('#availability2').html('Food Licenseno already exits..');
                    
                    }
                    else if(dataResult.statusCode==204){
                        alert('Something went wrong. Data not saved...');
                    }
                }
        });
     }
     else
     {
        alert('please fill all the fields...');
     }

             
 });
            
 });//main func


    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
