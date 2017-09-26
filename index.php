<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Blog</title>
</head>
<body>

<?php
include_once("data.php");
foreach ($data as $key => $value)
	{
	echo "<article><h1> { $value["title"] } </h1>";
	echo "<p> { $value["message"] } </p>";
	echo "</article>";

	}
echo "<pre>" . print_r($data,1) . "</pre>";
?>




</body>
</html>