<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Posts</title>
</head>
<body>
<div class="navbar">
	<ul>
		<li><a href="posts.php">Posts</a></li>
		<li><a href="index.php">Home</a></li>
		<li><a href="newpost.php">New</a></li>
	</ul>
</div>
<div class="ruta">
<div class="post">
<?php
include_once("data.php");
foreach ($data as $key => $value)
{
	echo "<article><h1> ". $value['title'] . " </h1>";
	echo "<p> ". $value['message'] ." </p>";
	echo "</article>";

}
//echo "<pre>" . print_r($data,1) . "</pre>";
?>
</div>
</div>

</body>
</html>