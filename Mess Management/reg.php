    <!DOCTYPE html>
<html lang="en">
<?php 
include "connection.php";
?>
<head>
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

     function validation()
    {
        var flag=0;
        var errmsg="\n";
    

            var prn = document.forms["studinfo"]["s_txt_prn"].value;
            var regprn = /^(?=.*[0-9]).{10,10}$/;

            if(prn=="")
            {
                errmsg=errmsg+"PRN number should not be blank \n";    
                flag=1;
            }
            else
            {
                if (regprn.test(prn)==false)
                {
                    errmsg=errmsg+"PRN number 10 digits only \n";    
                    flag=1;  
                }
            }

            var roll = document.forms["studinfo"]["s_txt_roll"].value;
            var regroll = /^(?=.*[0-9]).{1,4}$/;

            if (roll=="")
            {
                errmsg=errmsg+"Please enter valid roll number \n";    
                flag=1;
            }
            else
            {
                if(regroll.test(roll)==false)
                {
                    errmsg=errmsg+"roll number should not be blank \n";    
                    flag=1;
                }
            }


        var fname = document.forms["studinfo"]["txt_firstnm"].value;
        var regfname =/^[a-zA-Z ]{2,}$/;

        if (fname=="")
        {
          errmsg=errmsg+"first Name should not be blank \n";   
          flag=1;

        }
        else
        {
            if(regfname.test(fname)==false)
            {
                errmsg=errmsg+"first Name must be alphabets \n"; 
                flag=1;                  
            }
        }

            
         var mname = document.forms["studinfo"]["txt_middlenm"].value;
         var regmname = /^[a-zA-Z ]{1,}$/;

          if (mname=="")
          {
            errmsg=errmsg+"Middle Name should not be blank \n";   
            flag=1;
          }
          else
          {
            if(regmname.test(mname)==false) 
            {
              errmsg=errmsg+"Middle Name must be alphabet\n"; 
              flag=1;    
            }
        
          }
            
            var lname = document.forms["studinfo"]["txt_lastnm"].value;
            var reglname = /^[a-zA-Z. ]{2,}$/;

            if (lname=="")
            {
                errmsg=errmsg+"Last Name should not be blank \n";   
                flag=1;
            }
            else
            {

               if(reglname.test(lname)==false)
               {
                errmsg=errmsg+"Last Name must be alphabets\n";
                flag=1;
               }
            }

              var mob = document.forms["studinfo"]["mblno"].value;
            var regmob = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;

            if(mob=="")
            {
                errmsg=errmsg+"Mobile number should not be blank  \n";    
                flag=1;
            }
            else
            {
                if (regmob.test(mob)==false) 
                {
                    errmsg=errmsg+"Mobile Number should be 10 digit and start with 7,8,9 digit\n";  
                    flag=1;
                }
            }




            var email = document.forms["studinfo"]["email"].value;
            var regmail =/^([A-Za-z0-9_\-\.])+\@([A-Za-z_\-\.])+\.([A-Za-z]{2,10})$/;

            if(email=="")
            {
                errmsg=errmsg+"Email address should not be blank \n";    
                flag=1;
            }
            else
            {
                if (regmail.test(email)==false) 
                {
                  
                  errmsg=errmsg+" Email address must be alphabets, numbers, symbol only \n";
                    flag=1;
                }
            }    


           
            var pass = document.forms["studinfo"]["pass"].value;
            var regpass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

            if  (pass=="")
            {
                //echo "password is required";
                errmsg=errmsg+"Password should not be blank \n";   
                flag=1;
            }
            else
            {
               if(regpass.test(pass)==false)  
               {
                errmsg=errmsg+"Password must be alphabets, symbol, number only \n";
                flag=1;
               }
            }
                var cpass = document.forms["studinfo"]["c_pass"].value;
                if(pass != cpass)
                {
                    errmsg=errmsg+"Password is does not match \n"; 
                    flag=1;
                }



            var City = document.forms["studinfo"]["cit"].value;
             if(City=="")
             {
                errmsg=errmsg+"Please Submit Your city\n";
             }

             var State = document.forms["studinfo"]["state"].value;
             if(State=="")
             {
                errmsg=errmsg+"Please select valid State\n";
             }
        

            var department = document.forms["studinfo"]["dpt"].value;
             if(department=="")
             {
                errmsg=errmsg+"Please select valid department\n";
             }
            

            var Class = document.forms["studinfo"]["class"].value;
             if(Class=="")
             {
                errmsg=errmsg+"Please select valid Class\n";
             }

              var semester = document.forms["studinfo"]["sem"].value;
             if(semester=="")
             {
                errmsg=errmsg+"Please select valid semester\n";
             }



            var adharno = document.forms["studinfo"]["adhar_no"].value;
            var regadharno = /^(?=.*[0-9]).{12,12}$/;

            if(adharno=="")
            {
                errmsg=errmsg+"Adhar number should not be blank \n";   
                flag=1;
            }
            else
            {
                if (regadharno.test(adharno) == false) 
                {
                    errmsg=errmsg+"Adhar number must be numbers only \n";  
                    flag=1;
                }
            }



            var pincode = document.forms["studinfo"]["pincode"].value;
            var regpincode = /^(?=.*[0-9]).{6,6}$/;

            if(pincode=="")
            {
                 errmsg=errmsg+"Pincode should not be blank \n";   
                flag=1;
            }
            else
            {
                if (regpincode.test(pincode) == false) 
                {
                    errmsg=errmsg+"Pincode must be numbers, alphab\n";   
                    flag=1;
                }
            }

 

             var gender = document.forms["studinfo"]["gen"].value;
             if(gender=="")
             {
                errmsg=errmsg+"Please Enter  Gender\n";
             }



            var Studfee = document.forms["studinfo"]["stud_fee"].value;        
            var regstudfee = /^\d+(,\d{3})*(\.\d{1,2})?$/;

            if(Studfee=="")
            {
                 errmsg=errmsg+"Student fees should not be blank \n";   
                flag=1;
            }
            else
            {
                if (regstudfee.test(Studfee) == false) 
                {
                    errmsg=errmsg+"Student fees must be numbers only \n";  
                    flag=1;
                }
            }



            var img=document.forms["studinfo"]["file_img"];
            var validExt=["jpeg","jpg","png"];

                if(img.value!='')
                {
                    var img_ext=img.value.substring(img.value.lastIndexOf('.')+1);
                    var result=validExt.includes(img_ext);

                    if(result==false)
                    {
                        errmsg=errmsg+"selected file is Not an Image.....\n";
                        flag=1;
                    }
                    else
                    {
                        if(parseFloat(img.files[0].size/(1024*1024))>=3)
                        {
                           errmsg=errmsg+"file size must be smaller than 3MB.";
                           flag=1;
                            
                        }
                    }
                }
                else
                {
                    errmsg=errmsg+"no image is selected......";
                 

                }
                
            
                if(flag==1)
                
                {
                  alert(errmsg);
                  //$a=1;
                  return(false);

                }
                 return(true);
     

              }   

    //function to chnage image

        function readURL(input)//this madhla data input la pass krtoy. & tocheck data use if function
    {
            if (input.files && input.files[0]) 
            { //0 mdhe name pass               
              var reader = new FileReader();//its js function toread any file

                reader.onload = function (e)
                {

                    $('#avatar')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
    
    } 



    

</script>
</head>
<body><form action="" name="studinfo" method="POST" enctype="multipart/form-data" onsubmit="return validation();">

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Student Registration Form</h2>
                </div>

                    <div class="card-body">
                        <form method="POST"> 
                            <div class="form-row">
                                <div class="col-9 ">

                    <div class="row m-b-55">
                        <div class="name">PRN</div>
                           <div class="value">
                               <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="s_txt_prn">
                                            <label class="label--desc">10 Digit Unique PRN Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>


                    <div class="row ">
                        <div class="name">Roll Number</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2 ">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="s_txt_roll" id="s_txt_roll" >
                                            <label class="label--desc"> Roll number</label>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                         <div class="col-3">
                             
                                <img id="avatar" src="upload_photo/avatar.png" height="100px" width="100px">
                                <input class="input--style-5" type="file" name="file_img" 
                                 onchange="readURL(this);">
                                 <label class="label--desc"></label>
                                          
                            </div>
                    </div>


                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                                <div class="value">
                                    <div class="row row-space">
                                    <div class="col-2_3">
                                        <div class="input-group-desc">
                                            <input class="input--style-3" type="text" name="txt_firstnm" id="txt_firstnm" >
                                            <label class="label--desc">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-2_3">
                                        <div class="input-group-desc">
                                            <input class="input--style-3" type="text" name="txt_middlenm" id="txt_middlenm">
                                            <label class="label--desc">Middle Name</label>
                                        </div>
                                    </div>
                                    <div class="col-2_3">
                                        <div class="input-group-desc">
                                            <input class="input--style-3" type="text" name="txt_lastnm" id="txt_lastnm">
                                            <label class="label--desc">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Address</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="address" value="" id="address" >
                                        <label class="label--desc">Address</label>
                                    </div>
                                 </div>
                            </div> 


                        <div class="form-row">
                            <div class="name">Mobile Number</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" name="mblno" value="" id="mblno">
                                        <label class="label--desc">Mobile Number</label>
                                    </div>
                                </div>
                            </div>    


                        <div class="form-row">
                            <div class="name">Email ID</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="email" value="" id="email">
                                        <label class="label--desc">Email ID</label>
                                        <span id="availability"></span>
                                    </div>
                                </div>
                            </div>

                           <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" id="password" >
                                    <label class="label--desc">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="cpass"id="cpass" >
                                    <label class="label--desc">Confirm Password</label>
                                </div>
                            </div>
                        </div>

                            <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="cit" id ="city" >
                                            <option disabled="disabled" selected="selected" value="">Choose City</option>
                                        
                                                 <?php
                                                 $query1="SELECT `cty` FROM `dddata` WHERE `cty`!=''";
                                                $result1=mysqli_query($conn,$query1);
                                                while($row1 = mysqli_fetch_array($result1))  
                                                        {
            
                                               echo "<option value='".$row1['cty']."'>".$row1['cty']."</option>";
                                                         }
                                                ?> 
                                                </select>

                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">State</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="stat" id="state" >
                                            <option disabled="disabled" selected="selected" value="">Choose State</option>
                                                <?php
                                                 $query2="SELECT `sstt` FROM `dddata` WHERE `sstt` !=''";
                                                $result2=mysqli_query($conn,$query2);
                                                while($row2 = mysqli_fetch_array($result2))  
                                                        {
            
                                               echo "<option value='".$row2["sstt"]."'>".$row2['sstt']."</option>";
                                                         }
                                                ?> 
                                                </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Department</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="dpt" id="department" >
                                            <option disabled="disabled" selected="selected" value="">Choose Department</option>
                                                <?php
                                                 $query3="SELECT `dprmt` FROM `dddata` WHERE `dprmt` !=''";
                                                $result3=mysqli_query($conn,$query3);
                                                while($row3 = mysqli_fetch_array($result3))  
                                                        {
            
                                               echo "<option value='".$row3["dprmt"]."'>".$row3['dprmt']."</option>";
                                                         }
                                                ?> 
                                                </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <div class="form-row">
                            <div class="name">Class</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="clss" id="class" value="class" >
                                            <option disabled="disabled" selected="selected" value="">Choose Class</option>
                                           <?php
                                                 $query4="SELECT `clss` FROM `dddata` WHERE `clss`!=''";
                                                $result4=mysqli_query($conn,$query4);
                                                while($row4 = mysqli_fetch_array($result4))  
                                                        {
            
                                               echo "<option value='".$row4["clss"]."'>".$row4['clss']."</option>";
                                                         }
                                                ?> 
                                                </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                           <div class="name">Semester</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="sem" id="semester" value="semester" >
                                            <option disabled="disabled" selected="selected" value="">Choose Semester</option>
                                           <?php
                                                 $query5="SELECT `sem` FROM `dddata` WHERE `sem`!=''";
                                                $result5=mysqli_query($conn,$query5);
                                                while($row5 = mysqli_fetch_array($result5))  
                                                        {
            
                                               echo "<option value='".$row5["sem"]."'>".$row5['sem']."</option>";
                                                         }
                                                ?> 
                                                </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Date of Birth</div>
                                 <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2_3">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <input type="date" name="DOB" id="DOB"max="<?php echo date('Y-m-d');?>">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            
                        <div class="form-row m-b-55">
                            <div class="name">Aadhar Number</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="number" name="adharno"  id="adharno">
                                                <label class="label--desc">Adhar number</label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </div>


                        <div class="form-row m-b-55">
                            <div class="name">Pincode</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="number" name="pincode" id="pincode" >
                                                <label class="label--desc">Pincode</label>
                                            </div>
                                         </div>
                                    </div>
                                 </div>
                             </div>
                        

                         <div class="form-row m-b-55">
                            <div class="name">Date of Join</div>
                                 <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2_3">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <input type="date" name="DOJ" id="DOJ" min="<?php echo date('Y-m-d');?>">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>


                    <div class="form-row">
                        <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">

                                <label class="radio-container m-r-55">Male
                                    <input type="radio" name="gen" value="M" id="gen">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-container">Female
                                    <input type="radio" name="gen" value="F" id="gen">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                          <div class="form-row m-b-55">
                            <div class="name">Student Fee</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="stud_fee" id="stud_fee">
                                            <label class="label--desc">Student fees</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                

                        <div class="form-row m-b-55">
                            <div class="name">RFID Number</div>
                            <div class="value" name="photo">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="rfid"  id="rfid">
                                            <label class="label--desc">RFID Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div align="center">
                            <input class="btn btn--radius-2 btn--green" type="submit" name="reg" value="Submit" id="btn_reg">
                            <input class="btn btn--radius-2 btn--red" type = "reset" value="Reset">        
                        </div>

        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php

         if(isset($_POST['reg']))
        
            {
                 $target_path="upload_photo/";
            $target_path= $target_path.basename($_FILES['file_img']['tmp_name']);

                if(move_uploaded_file($_FILES['file_img']['tmp_name'],$target_path))
                {
                $prn=$_POST['s_txt_prn'];
                $roll=$_POST['s_txt_roll'];
                $Name=$_POST['txt_firstnm'].' '.$_POST['txt_middlenm'].' '.$_POST['txt_lastnm'];
                $add=$_POST['addr'];
                $phn=$_POST['mblno'];
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $city=$_POST['cit'];
                $state=$_POST['stat'];
                $department=$_POST['dpt'];
                $class=$_POST['clss'];
                $semseter=$_POST['sem'];
                $DOB=date('y-m-d');
                $adharno=$_POST['adhar_no'];
                $pincode=$_POST['pincode'];
                $DOJ=date('y-m-d');
                $gender=$_POST['gen'];
                $studfee=$_POST['stud_fee'];
                $RFID=$_POST['rfid'];
                $curr_date=date('y-m-d');
                $filetmp = $_FILES['file_img']['tmp_name'];
                $filename = $_FILES['file_img']['name'];
                $filetype = $_FILES['file_img']['type'];
                $filesize = $_FILES['file_img']['size'];
                $fileinfo = getimagesize($_FILES['file_img']['tmp_name']);
                $filewidth = $fileinfo[0];
                $fileheight = $fileinfo[1];
                $filepath = "photo/".$filename;
                
    if($filetmp == "")
    {
        echo "please select a photo";
    }
    else 
    {
        
        if ($_FILES["file_img"]["size"] > 2097152)
         {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
        }
        else
        {
            
            if($filetype != "image/jpeg" && $filetype != "image/png" && $filetype != "image/gif")
            {
                echo "Please upload photo in jpg / png / gif only ";
            }
             else
            {
                
                move_uploaded_file($filetmp,$filepath);

             // $sql=mysqli_query($conn,"SELECT * FROM `tbl_registrations` WHERE email='$email'");
             
             //    if(mysqli_num_rows($sql)>0)
             //    {
             //        echo "<script>alert('Email ID already exits')</script>";
             //    }
             //    else
             //    {

                $query="INSERT INTO `tbl_registrations` (`stud_prn`,`stud_rollno`,`user_name`,`address`,`mbl_no`,`email`,`password`,`city`,`state`,`department`,`class`,`semester`,`dob`,`aadhar_no`,`pin_code`,`joining_date`,`gender`,`stud_fee`, `img_name`, `img_path`, `img_type`,`Rfid`,`curr_date`,`modified_date`,`type`)
                 VALUES ('".$prn."','".$roll."','".$Name."','".$add."','".$phn."','".$email."','".$pass."','".$city."','".$state."','".$department."','".$class."','".$semseter."','".$DOB."','".$adharno."','".$pincode."','".$DOJ."','".$gender."','".$studfee."','".$filename."','".$filepath."','".$filetype."','".$RFID."','".$curr_date."','".$curr_date."','student')";


                // echo $sql;
                $result=mysqli_query($conn,$query) or die(mysqli_error($conn));

                if($result)
                 {
                    echo "<script>alert('Record Inserted')</script>";
                        header("location:login.php");
                        exit();
                    
                 }
                    else
                    {
                       echo "<script>alert('Error')</script>";
                    }
                }
        
            }
            
        }
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
    <script type="text/javascript">
           function readURL(input)//this madhla data input la pass krtoy. & tocheck data use if function
    {
            if (input.files && input.files[0]) 
            { //0 mdhe name pass               
              var reader = new FileReader();//its js function toread any file

                reader.onload = function (e)
                {

                    $('#avatar')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
    
    } 
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>