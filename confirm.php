<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>TubeDown</title>
</head>
<body>
	<h1>TubeDown</h1>
	<h3>Youtube Download Helper</h3>
	<h2>You entered the following Youtube Video to download.</h2>

	<p>Input: <?php echo $_POST["urlorid"]; ?></p>
	<p>Youtube Video ID: <?php
	include 'util.php';
	$id = get_id ( $_POST ["urlorid"] );
	echo $id;
	?> </p>
	<p>Youtube Video URL: <?php echo get_url ( $id ); ?></p>
	<p>Title: <?php
	$title = get_title ( $id );
	echo $title;
	?> </p>
	<p>Duration: <?php echo get_duration($id); ?></p>
	<form action="download.php" method="post">
		<p>
			Title: <input type="text" name="title" value="<?php echo $title; ?>" />
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
		</p>
		<p>
			<input type="submit" title="Confirm" value="Confirm" />
		</p>
	</form>

	<p>
		<a href="index.php">Back</a>
	</p>

</body>
</html>