<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link href="dashboard/bootstrap.css" rel="stylesheet">
  <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" 
      aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
      

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" 
            aria-expanded="false">Profile</a>
            <div class="dropdown-menu">
             <!--  <a class="dropdown-item" href="/Mess Management/edit_stud_profile.php">Edit Profile</a> -->
              <a class="dropdown-item" href="change_old_pass.php">Change Password</a>
              <a class="dropdown-item" href="profile.php">View Profile</a>
              <div class="dropdown-divider"></div>
              <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="report1.php">Report</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="stud_input.php">Attendance</a>
          </li>
         

          <li class="nav-item">
            <a class="nav-link" href="notice.php">Notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">Feedback</a>
          </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->

        <div class="" align="right">
          <!-- <?php echo $_session["name"];?> " | " -->
          <a class="nav-link1" href="logout.php">Logout</a>
        </div>
      </div>
    </nav>

