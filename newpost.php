<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>New Posts</title>
</head>
<body>

<div class="navbar">
	<ul>
		<li><a href="posts.php">Posts</a></li>
		<li><a href="index.php">Home</a></li>
		<li><a href="newpost.php">New</a></li>
	</ul>
</div>
<div>
	<div>
		<form action="newpost.php" method="post">
		Title: <input type="text" name="Title"><br>
		Message: <input type="text" name="Message"><br>
		<input type="submit" name="Save">
</form>
	</div>
</div>
<div>
	<div>
	<?php

	?>
	</div>
</div>


</body>
</html>