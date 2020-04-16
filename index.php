<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Register
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/styl.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

</head>


<body>
	<div class="main-w3layouts wrapper">
		<h1>Fill Up Details</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post" action="index.php">
  	<?php include('error.php'); ?>
					<input class="text" type="text" name="firstname" placeholder="First name">
<br>
<br>

<input class="text" type="text" name="lastname" placeholder="Last name">

					<input class="text email" type="email" placeholder="Email" name="email">
					
					
					<input type="submit" value="Register" name='reg'>
</form>	
<form method="post" action="index.php">
	<input type="submit" value="Tables" name='tabss'>
</form>
	</div>	</div>
	<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>
