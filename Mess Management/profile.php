 <?php 
  require 'session.php';

  require 'connection.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

      <!-- Title Page-->
    <title>Student Profile</title>

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
  	
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
  
  


  <script type="text/javascript">

        function validateform()
        {
            var flag=0;
            var errmsg="\n";        
           
           
              var roll = document.forms["studinfo"]["rollno"].value;
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


        var fname = document.forms["studinfo"]["name"].value;
        var regfname =/^[a-zA-Z ]{2,}$/;

        if (fname=="")
         {
           errmsg=errmsg+"Name should not be blank \n";   
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

           var Address1 = document.forms["studinfo"]["address1"].value;
            var regaddress1 = /^[a-zA-Z0-9/.'()&, ]*.{5,}$/;

            if (Address1 == "") 
            {
                errmsg=errmsg+"Address is not strong enough \n";    
                flag=1;
            }
            else
            {
              if(regaddress1.test(Address1)==false)
              {
                errmsg=errmsg+"Address Must Be Alphabets,Dot,Space,Numbers Only \n"; 
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
              if(regmob.test(mob)==false)
              {
                errmsg=errmsg+"Mobile number should be number only \n"; 
                flag=1;                  
              }
            }

            var email = document.forms["studinfo"]["email"].value;

            var regmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
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


            var City = document.forms["studinfo"]["city"].value;
             if(City=="")
             {
                errmsg=errmsg+"Please Submit Your city\n";
             }

             var State = document.forms["studinfo"]["state"].value;
             if(State=="")
             {
                errmsg=errmsg+"Please select valid State\n";
             }
        

            var department = document.forms["studinfo"]["department"].value;
             if(department=="")
             {
                errmsg=errmsg+"Please select valid department\n";
             }
            

            var Class = document.forms["studinfo"]["class"].value;
             if(Class=="")
             {
                errmsg=errmsg+"Please select valid Class\n";
             }

              var semester = document.forms["studinfo"]["semester"].value;
             if(semester=="")
             {
                errmsg=errmsg+"Please select valid semester\n";
             }



            var adharno = document.forms["studinfo"]["aadhar_no"].value;
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
              if(regpincode.test(pincode)==false)
              {
                errmsg=errmsg+"pincode must be in Numbers Only \n"; 
                flag=1;                  
              }
            }

             var gender = document.forms["studinfo"]["gender"].value;
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

           
            var rfidno = document.forms["studinfo"]["rfid"].value;
            // var regrfidno =/^(?=.*[0-9]).{6,6}$/;
            var regrfidno = /^(?=.*[a-zA-Z][0-9]).{14,14}$/;

            if(rfidno=="")
            {
                errmsg=errmsg+"RFID number should not be blank \n";   
                flag=1;
            }
            else
            {
                if (regrfidno.test(rfidno) == false) 
                {
                    errmsg=errmsg+"RFID number must be in alphabets , numbers only.\n";  
                    flag=1;
                }
            }

             if(flag==1)
                
                {
                  alert(errmsg);
                  //$a=1;
                  return(false);

                }
                 return(true);
}
      </script>
    </head>

<body>
  <?php include 'student_dashboard.php'; ?>
    <section>
    <!-- <form action="update_stud_profile.php" method="POST"> -->
      <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
          <div class="card card-5">
            <div class="card-heading"><h2 class="title">My Profile</h2></div>
              <div class="card-body">

              <form method="POST" action="update_stud_profile.php" name="studinfo" onsubmit=" validateform();">

                  <input type="hidden" name="role" value="student">
                      <?php
                        
                      $query = "SELECT * FROM `tbl_registrations` WHERE id = '".$_SESSION['user_id']."' ";
                      $result = mysqli_query($conn, $query);
                      if($row = mysqli_fetch_assoc($result));
                      {
                        ?>
                        <div class="form-row">
                            <div class="col-9">
                              <div class="form-row m-b-55">
                            <div class="name">PRN</div>
                            <div class="value">
                              <div class="input-group">
                                    <div class="col-9 ">
                              <div class="input-group">
                                <input class="input--style-5" type="number" name="prn" readonly value = "<?php echo $row['stud_prn'];?>" id="prn">
                              </div>                              
                            </div>
                          </div>
                        </div>
                            </div>
                                             
                          <div class="row ">
                          <div class="name">Roll Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="rollno" value = "<?php echo $row['stud_rollno'];?>" id="rollno" disabled>
                                           
                                        </div>
                                    </div>
                                 </div>
                            </div>
                          </div>
                          </div>

                          <div class="col-3">
                               <?php $v='upload_photo/'.$row['photo']; ?>
                               <img src="<?php echo $v; ?>"
                               height="100px" width="100px">
                           </div>
                         
                    </div>

                        <div class="form-row">
                          <div class="name">Name</div>
                            <div class="value">
                              <div class="input-group">
                                <input class="input--style-5" type="text" name="name" value = "<?php echo $row['user_name'];?>" id="name" disabled>
                              </div>
                            </div>
                          </div>

                          <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                              <div class="input-group">
                                <input class="input--style-5" type="text" name="address1"  value = "<?php echo $row['address'];?>" id="add" disabled>
                              </div>
                            </div>
                          </div>

                           <div class="form-row">
                            <div class="name">Mobile Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="mblno" value="<?php echo $row['mbl_no'];?>"id="mbl" disabled>
                                </div>
                            </div>
                        </div>  

                         <div class="form-row">
                            <div class="name">Email ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="email" value="<?php echo $row['email'];?>"id="e-mail" disabled>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                          <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="city" id="city" disabled>
                                           <option value="<?php echo $row['city'] ?>"></option>
                                            
                                            <?php
                                                $query1 = "SELECT `cty` FROM `dddata` where cty!=''";
                                                $result1 = mysqli_query($conn,$query1);
                                                while ($row1=mysqli_fetch_array($result1))
                                                 {
                                                    if($row1['cty']==$row['city'])
                                                    echo "<option value='".$row1['cty']."' selected>".$row1['cty']."</option>";
                                                  else
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
                                        <select name="state" id="state" disabled>
                                           <option value="<?php echo $state ?>"></option> 
                                            
                                            <?php
                                                $query1 = "SELECT `sstt` FROM `dddata` where sstt!=''";
                                                $result1 = mysqli_query($conn,$query1);
                                                while ($row1=mysqli_fetch_array($result1))
                                                 {
                                                    if($row1['sstt']==$row['state'])
                                                    echo "<option value='".$row1['sstt']."' selected>".$row1['sstt']."</option>";
                                                  else
                                                    echo "<option value='".$row1['sstt']."'>".$row1['sstt']."</option>";
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
                                        <select name="department" id="department" disabled>
                                            <option value="<?php echo $row['department'] ?>"></option>
                                            
                                            <?php
                                                $query1 = "SELECT `dprmt` FROM `dddata` where dprmt!=''";
                                                $result1 = mysqli_query($conn,$query1);
                                                while ($row1=mysqli_fetch_array($result1))
                                                 {
                                                    if($row1['dprmt']==$row['department'])
                                                    echo "<option value='".$row1['dprmt']."' selected>".$row1['dprmt']."</option>";
                                                  else
                                                    echo "<option value='".$row1['dprmt']."'>".$row1['dprmt']."</option>";
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
                                        <select name="cls" id="class" disabled>
                                          <?php
                                                $query1 = "SELECT `clss` FROM `dddata` where clss!=''";
                                                $result1 = mysqli_query($conn,$query1);
                                                while ($row1=mysqli_fetch_array($result1))
                                                 {
                                                    if($row1['clss']==$row['class'])
                                                    echo "<option value='".$row1['clss']."' selected>".$row1['clss']."</option>";
                                                  else
                                                    echo "<option value='".$row1['clss']."'>".$row1['clss']."</option>";
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
                                        <select name="semester" id="semester" disabled>
                                          <?php
                                                $query1 = "SELECT `sem` FROM `dddata` where sem!=''";
                                                $result1 = mysqli_query($conn,$query1);
                                                while ($row1=mysqli_fetch_array($result1))
                                                 {
                                                    if($row1['sem']==$row['semester'])
                                                    echo "<option value='".$row1['sem']."' selected>".$row1['sem']."</option>";
                                                  else
                                                    echo "<option value='".$row1['sem']."'>".$row1['sem']."</option>";
                                                 }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
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
                                            <input class="input--style-5" type="text" name="aadhar_no" value="<?php echo $row['aadhar_no'];?>" id="aadhar" disabled>
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
                                            <input class="input--style-5" type="text" name="pincode" value="<?php echo $row['pin_code'];?>" id="pin" disabled>                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                          <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                  <?php
                                  if ($row['gender']=="M")
                                   {
                                    ?>
                                    <label class="radio-container m-r-55">Male
                                    <input type="radio" name="gen" id="M" value = "M" disabled checked="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gen" id="F" value = "F" disabled>
                                    <span class="checkmark"></span>
                                    </label>
                                <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <label class="radio-container m-r-55">Male
                                    <input type="radio" name="gen" id="M" value = "M" disabled>
                                    <span class="checkmark"></span>
                                </label>
                                  <label class="radio-container">Female
                                    <input type="radio" name="gen" id="F" value = "F"  disabled checked="">
                                    <span class="checkmark"></span>
                                    </label>
                                <?php
                                  }
                                ?>
                              </div>
                            </div>
                        </div>
                      
                        <div class="form-row m-b-55">
                          <div class="name">Student Fee</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="stud_fee" value="<?php echo $row['stud_fee'];?>" id="fee" disabled>                    
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
                                            <input class="input--style-5" type="text" name="rfid" value="<?php echo $row['Rfid'];?>"id="RFID" disabled>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input class="btn btn--radius-2 btn--green" type="button" name='edit' width="30%"
                        value='edit'>
                        <button class="btn btn--radius-2 btn--green" type="submit" name="updatep" value='updatep' width="100%">
                        Update</button>

                      </div>
                    </div>
                  <?php
                    }
                  ?>
                </form>
                </div>
                </div>
              </div>
              </div>
            </div>
          </div>

          
        
      </section>

    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        $(document).ready(function()
        {

         $("input[name=edit]").on("click",function(){

                 $("input[type=text],select").removeAttr("disabled");
         })
     })
    </script>
  </body>
</html>

