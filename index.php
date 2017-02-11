<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title>primer app</title>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <script src="js/jquery-3.1.1.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
	      		<div class="col s12">This div is 12-columns wide</div>
	      		<div class="col s6">This div is 6-columns wide</div>
	      		<div class="col s6">This div is 6-columns wide</div>
	    	</div>
			<?php 

				$string = "Tipo de cadena";
				print($string);
				$boolean = true;
				print($boolean);
				define("PATH",__FILE__);
				print(PATH);

		 	?>
		</div>
		

	</body>
</html>
