<?php
include ('connection.php');

//session_start();
include('student_header.php');
?>


     <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading"><h2 class="title">Change Password</h2></div>
                <div class="card-body">
                    <form action="" name="studinfo" method="POST" onsubmit="return validateform();">
                        
                        <div class="form-row">
                            <div class="name">Old Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="oldpassword" name="oldpass" id="oldpass">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">New Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="newpassword" name="newpass" id="newpass">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Comfirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="cpassword" name="comfirmpass" id="cimfirmpass">
                                </div>
                            </div>
                        </div>

                        <div>
                          <button class="btn btn--radius-2 btn--green" type="submit" name="submit" value="submit">Change</button>         
                                
                                <button class="btn btn--radius-2 btn--red" type="submit">Cancel</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


<?php    include('stud_footer.php'); ?>

 <!--div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading"><h2 class="title">Student Profile</h2></div>
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
                                    <!-- <button class="btn btn--radius-2 btn--green" type="submit" value="search"></button> >
                                    <input class="btn btn--radius-2 btn--red" type="submit" value="Cancel">
                                </div>
                            </div>
                            <!-- <input type="submit" class="btn btn--radius-2 btn--green"name = "search" value = "Search"><br><br> >
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>










    
    <form action="" name="studinfo" method="POST" onsubmit="validateform()">

        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Change Password</h2>
                    </div>
                    <div class="card-body">
                        <!-- <form method="POST"> >
                            

                            <div class="form-row">
                                <div class="name">Email</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="email" name="email" id="email">
                                    </div>
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="name">Old Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="oldpassword" name="oldpass" id="oldpass">
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="name">New Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="newpassword" name="newpass" id="newpass">
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="name">Comfirm Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="cpassword" name="comfirmpass" id="cimfirmpass">
                                    </div>
                                </div>
                            </div>
                            




                            
                            <div>
                                
                                <button class="btn btn--radius-2 btn--green" type="submit" name="submit" value="submit">Change Password</button>

                               <input type="submit" class="btn btn--radius-2 btn--green"name = "updatep" value = "updatep"><br><br> >
         
                                
                                <button class="btn btn--radius-2 btn--orenge" type="submit">Cancel</button>
                            </div>
                            </div>
                        
                    
                </div> 
            </div>
        </div> 
    </form-->

    

<?php
    if(isset($_POST['submit']))

    {

    $email = $_POST['email'];
    
    $oldpassword = $_POST['oldpass'];
    $newpassword = $_POST['newpass'];
    $confirmpassword = $_POST['comfirmpass'];
    $qry="SELECT email,password FROM `tbl_registrations` WHERE email ='".$email."' AND password='".$oldpassword."'";
   
    $result = mysqli_query($conn,$qry);
  

    

    if($row = mysqli_fetch_array($result))
    {
        $sql=mysqli_query($conn,"UPDATE `tbl_registrations` SET password='$newpassword' WHERE email='".$email."'");
        $_SESSION['MSG1']="Password Change Successfully";

    }
    else
    {
        $_SESSION['MSG1']= "Password Does Not Match";
    }
    }
    ?>
<?php echo $_SESSION['MSG1'];?><?php echo $_SESSION['MSG1']="";?>



<!-- </body>This templates was made by Colorlib (https://colorlib.com)
</div>
</div>
</div>
</html> -->
<!-- end document-->






