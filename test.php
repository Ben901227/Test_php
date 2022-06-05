<?php
	$name = '易靖程';
	$def = true;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Test</title>
	</head>

	<script>
		var name = "<? php echo $name; ?>";
		console.log(name);
	</script>
	<body>
		<?php	
			if($def){
				echo '<script>alert("'.$name.'")</script>';
			}
		?>
	</body>
</html>