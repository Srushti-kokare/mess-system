
<?php
include('connection.php');
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
    <!-- <style media="screen">
      body{
        margin-top: 80px;
        padding: 10px;
        background-color:grey;
       }
    </style> -->
    <style media="screen">
    .btn {
      display: inline-block;
      line-height: 20px;
      padding: 5 10px;
      -webkit-transition: all 0.2s ease;
      -o-transition: all 0.2s ease;
      -moz-transition: all 0.2s ease;
      transition: all 0.2s ease;
      cursor: pointer;
      font-size: 10px;
      text-transform: uppercase;
      font-weight: 800;
      color: #fff;
      font-family: inherit;
      width:60px;

    }
    .btn--radius-2 {
      -webkit-border-radius: 1px;
      -moz-border-radius: 1px;
      border-radius: 1px;
    }
    .btn--pill {
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
    }

    </style>
  </head>

  <body>
    <section>
      <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
          <div class="card card-5">
            <div class="card-heading"><h2 class="title">menue price update here</h2></div>
            <div class="card-body">
  <form action="" name="menue_pricing" method="POST">

<div align="center">
<div class="card-body">
  <div class="form-row">
    <div class="name">Date</div>
    <div class="value">
      <div class="input-group">
<input type="datepicker" name="date" value="" style="border:solid;width:15%">
</div>
</div>
</div>
</div>
</div>

<div align="center">
<div class="card-body">
<div class="form-row">
<div class="name">MORNING PRICE</div>
<div class="value">
  <div class="input-group">
  <input type="text" placeholder="enter price" name="morning-price" value="" style="border:solid;width:15%" required/><br><br>
</div>
</div>
</div>
</div>
</div>

  <div align="center">
<div class="card-body">
<div class="form-row">
  <div class="name">LUNCH PRICE:</div>
  <div class="value">
    <div class="input-group">
  <input type="text" name="lunch-price" placeholder="enter price" value=""style="border:solid;width:15%" required/><br><br>
</div>
</div>
</div>
</div>
</div>

  <div align="center">
<div class="card-body">
<div class="form-row">
  <div class="name">EVENING PRICE:</div>
  <div class="value">
    <div class="input-group">
  <input type="text" name="evening-price" placeholder="enter price" value=""style="border:solid;width:15%" required/><br><br>
</div>
</div>
</div>
</div>
</div>

  <div align="center">
<div class="card-body">
<div class="form-row">
  <div class="name">DINNER PRICE:</div>
  <div class="value">
    <div class="input-group">
  <input type="text" name="dinner-price" placeholder="enter price" value=""style="border:solid;width:15%" required/><br><br>
</div>
</div>
</div>
</div>
</div>
      <div align="center">
        <input class="btn btn--radius-2 btn--green" type="submit" name="submit1" value="save">
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</section>

  <?php
include('connection.php');
if(isset($_POST['submit1']))
{
$morning=$_POST['morning-price'];
$lunch=$_POST['lunch-price'];
$evening=$_POST['evening-price'];
$dinner=$_POST['dinner-price'];
$dt=date("y-m-d");
if($morning!="" && $lunch!="" && $evening!="" && $dinner!="") {

    $query1="INSERT INTO menue_price(date,mor_price, lun_price, even_price, din_price)
     VALUES ('".$dt."','".$morning."','".$lunch."','".$evening."','".$dinner."')";//'".$dt."',
     // echo $query1;
     $result=mysqli_query($conn,$query1)or die($conn);
    // $a="price has been updated";
     if($result){
       echo "<script> alert('price has been updated'); </script>";
     }
     else {
       echo "there is a problem in updating price";
     }
}}
   ?>

  <!-- Jquery JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Vendor JS-->
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/datepicker/moment.min.js"></script>
  <script src="vendor/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>
  </body>
  </html>
