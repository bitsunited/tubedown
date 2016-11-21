<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>TubeDown</title>
</head>
<body>
	<h1>TubeDown</h1>
	<h3>Youtube Download Helper</h3>
	<h2>Your video will be downloaded...</h2>

	<p>Youtube Video ID: <?php echo $_POST["id"]; ?></p>
	<p>Title: <?php echo $_POST ["title"]; ?></p>
	<p>Command: <?php
	include 'util.php';
	echo get_command ( $_POST ["id"], $_POST ["title"] );
	?></p>
	
	<?php
	include 'util.php';
	exec ( get_command ( $_POST ["id"], $_POST ["title"] ) );
	?>

	<p>
		<a href="index.php">Back</a>
	</p>

</body>
</html>