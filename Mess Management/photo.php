<?php 
include('connection.php');
if (isset($_POST['upload']))
{
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	$file_tem_loc = $_FILES['file']['tmp_name'];
	$file_store = "upload/".$file_name;

	if(move_uploaded_file($file_tem_loc, $file_store))
	{
		echo"<script>
		var data='upload/".$file_name."';
		console.log(data);
		document.getElementById('avatar').src = 'upload/".$file_name."';
		</script>";
		
	}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
 </head>
 	
 	<body>
 	<form  enctype="multipart/form-data" method="POST">
 	<label>Uploading File</label>
 	<p><input type="file" name="file" onchange="readURL(this);"></p><!--custom function -->
 	<p><input type="submit" name="upload" value="Upload Image"></p>
 
 </form>
 <img src = "avatar.png" width ="150" height="150" id="avatar">
 </body>
 <script type="text/javascript">
 	     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {

                    $('#avatar')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
 </script>
 </html>

 <?php 

 	$folder = "upload/";
 	if (is_dir($folder))
 	{
 		if($open = opendir($folder))
 		{
 			while (($file = readdir($open) !=false))
 			 {
 				if($file == '.' || $file =='..') continue;
 				echo '<img src = "upload/'.$file.'" width ="150" height="150">';
 			}
 			closedir($open);

 		}

 	}

  ?>