<!DOCTYPE html>
<html>
<head>
	<title>Sinfony</title>
	<style type="text/css">
		body{
			background: #000;
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
		}
		h1{
			background: #555;
			color: #fff;
			width: 60%;
			height: 30%;
			padding: 10px;
			margin: 20px auto;
			border-bottom: 2px #fff solid;
		}
		a{color: #3333ee;}
		a:hover{color: #ff0000;}
		.files{
			width: 60%;
			padding: 10px;
			margin: 0 auto;
			color: #fff;
			font-family: Arial;
		}
	</style>
</head>
<body>
	<h1>Aqui tenemos los Sinfony Proyects</h1>
	<div class="files">
	<?php
	$directorio = opendir(".");
	while ($archivo = readdir($directorio))
	{
	if(is_dir($archivo)){
	}
	else{
	echo "<a href=".$archivo.">".$archivo."</a>";
    	}}
	?>
	</div>
</body>
</html>
