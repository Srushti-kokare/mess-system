 <!DOCTYPE html>
<html>
<head>
	<title></title>


<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
 --><style>
		button {
			background: white;
			border: 1px solid silver;
			padding: 2px;
			border-top-right-radius: 4px;
			border-bottom-right-radius: 4px;  
		}
		button:focus,input:focus
		{
			outline: none;		
		}

</style>
</head>
<body>
	<script>
		function showpw()
		{
			var pw = document.getElementById('showpw');
			if (pw.type == "text")
			 pw.type = "password";
			else
				pw.type = "text";
		}
	</script>

	<input type="password" name="" id="showpw" placeholder="Enter password"><button onclick="showpw();">
	<img src="download.png" height="15" width="15"></button>
</body>
</html> 
<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>show pass</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<i class="fa fa-eye" id= "eye"></i>
	<input type="password" name="" id="pwd" placeholder="password">
</div>
<script type="text/javascript">
	var pwd = document.getElementById('pwd');
	var eye = document.getElementById('eye');

	eye.addEventListener('click', togglePass);

	function togglePass()
	{
		eye.classList.toggle('active');
		(pwd.type == 'password') ? pwd.type = 'text';
		pwd.type = 'password';
	}
</script>	
</body>
</html> -->