<?php 
$map = [
		[1,2,3],
		[4,5,6],
		[7,8,9]
];
$a = array(3);
foreach ($map as $a){
	foreach ($a as $col){
		echo $col."&nbsp;";
	}
	echo "<br />";
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
<input type="button" value="点击一下" />
</body>
</html>