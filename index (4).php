<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Форма регистрации пользователя</h1>
	
	<form action="index.php" method="post">
		<label for="value_a">email</label>	
		<input type="text" name="email"id="value_a"value="<?=$_POST["email"]?>"><br>
		<label for="value_b">pasword</label>	
		<input type="text" name="pasword"id="value_b"value="<?=$_POST["pasword"]?>"><br>
		<label for="value_c">confirm</label>	
		<input type="text" name="confirm"id="value_c"value="<?=$_POST["confirm"]?>"><br>
    <h2>Форма для ввода личных данных</h2>
        <label for="value_d">surname</label>	
		<input type="text" name="surname"id="value_d"value="<?=$_POST["surname"]?>"><br>
		<label for="value_e">name</label>	
		<input type="text" name="name"id="value_e"value="<?=$_POST["name"]?>"><br>
		<label for="value_f">patronymic</label>	
		<input type="text" name="patronymic"id="value_f"value="<?=$_POST["patronymic"]?>"><br>
		<label for="value_g">gender</label>	
		<input type="text" name="gender"id="value_g"value="<?=$_POST["gender"]?>"><br>
		<input type="submit" value="*****">
    </form>

    <table style="width:100%">
  <tr>
    <th>email</th>
    <th>password</th>
    <th>surnameandinitials</th>
    <th>gender</th>
  </tr>
  <tr>
    <td>*****</td>
    <td>*****</td>
    <td>*****</td>
    <td>*****</td>

  </tr>
  
</table>

    <?php 
        if($_POST["email"] == "value_a") {
        	echo $_POST["email"];
        }
        if($_POST["password"] == "value_b") {
        	echo $_POST["password"];
        }

        if($_POST["confirm"] == "value_c") {
        	echo $_POST["confirm"];
        }

        if($_POST["surname"] == "value_d") {
        	echo $_POST["surname"];
        }

        if($_POST["name"] == "value_e") {
        	echo $_POST["name"];
        }

        if($_POST["patronymic"] == "value_f") {
        	echo $_POST["patronymic"];
        }
        if($_POST["gender"] == "value_g") {
        	echo $_POST["gender"];
        }

    echo $_POST ["table style"];
    


    ?>
	
</body>
</html>