<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="index.php" method="post">
		<label for="value_a">A</label>
		<input type="text" name="A" id="value_a" value="<?=$_POST["A"]?>"><br>
		<label for="value_b">B</label>
		<input type="text" name="B" id="value_b" value="<?=$_POST["B"]?>"><br>
		<input type="radio" name="sign" value="sum">+<br>
		<input type="radio" name="sign" value="sub">-<br>
		<input type="radio" name="sign" value="mul">*<br>
		<input type="radio" name="sign" value="div">/<br>
		<input type="submit" value="=">
	</form>

	<?php

		if( $_POST["sign"] == "sum"){
			echo $_POST["A"] + $_POST["B"];	
		} 

		if( $_POST["sign"] == "sub"){
			echo $_POST["A"] - $_POST["B"];
		} 

		if( $_POST["sign"] == "mul"){
			echo $_POST["A"] * $_POST["B"];
		} 

		if( $_POST["sign"] == "div"){
			echo $_POST["A"] / $_POST["B"];
		} 
	?>
</body>
</html>