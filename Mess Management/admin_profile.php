 <?php 
  require 'session.php';

  require 'connection.php';

  // require 'functions.php';

  // if(isset($_SESSION['email'], $_SESSION['password'])) {

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
  </head>
  <body>
<?php include 'admin_header.php'; ?>
    
    <section>
    <!-- <form action="update_stud_profile.php" method="POST"> -->
      <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
          <div class="card card-5">
            <div class="card-heading"><h2 class="title">My Profile</h2></div>
            <div class="card-body">
              <!-- <div class="options">
                <button class="btn btn--radius-2 btn--green" name="edit" value="Edit">Edit Profile</button>
                <input class="btn btn--radius-2 btn--green" type="button" name='edit' value='edit'>
              </div> -->
              <form method="POST" action="update_stud_profile.php" name="f1">
                
                <input type="hidden" name="role" value="admin">
                      <?php
                        
                      $query = "SELECT * FROM `tbl_registrations` WHERE id = '".$_SESSION['user_id']."' ";
                      $result = mysqli_query($conn, $query);
                      if($row = mysqli_fetch_assoc($result));
                      {
                        ?>
                        

                          <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                              <div class="input-group">
                                <input class="input--style-5" type="text" name="name" value = "<?php echo $row['user_name'];?>" id="name" disabled>
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
                        <!-- <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pass" value="<//?php echo $row['password'];?>" id="pass" disabled >
                                </div>
                            </div>
                        </div>
                         -->
                          <div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                  <?php
                                  if ($row['gender']=="m")
                                   {
                                    ?>
                                    <label class="radio-container m-r-55">Male
                                    <input type="radio" name="gen" id="M" value = "M" checked=""   disabled >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gen" id="F" value = "F" disabled >
                                    <span class="checkmark"></span>
                                    </label>
                                <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <label class="radio-container m-r-55">Male
                                    <input type="radio" name="gen" id="M" value = "M" disabled >
                                    <span class="checkmark" checked=""></span>
                                </label>
                                  <label class="radio-container">Female
                                    <input type="radio" name="gen" id="F" value = "F" disabled >
                                    <span class="checkmark"></span>
                                    </label>
                                <?php
                                  }
                                ?>
                                
                            
                                </div>
                            </div>
                        </div>
                        

                          <input class="btn btn--radius-2 btn--green" type="button" name='edit'width="30%" value='edit'>


                            <button class="btn btn--radius-2 btn--green" type="submit" name="updatep" value='updatep' width="100%">Update</button>
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
        
     $(document).ready(function(){

         // $("form input[type=text],form input[type=checkbox]").prop("disabled",true);

         $("input[name=edit]").on("click",function(){

                 $("input[type=text],select").removeAttr("disabled");
         })

         // $("input[name=save]").on("click",function(){

         //     $("input[type=text],input[type=checkbox],select").prop("disabled",true);
         // })


     })
    </script>


  </body>
</html>

