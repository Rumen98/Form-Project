
<html>
<head>
	<title>Добавяне на Aдрес на Потребител</title>
	<style>
body {background-color: grey} ;
</style>
</head>
<body>
	<?php 
		include 'connection.php';
			


	 ?>
	<form action="insert2.php" method="post">
		
		Адрес Ред 1  * :<input type="text" name="address" value=""><br>
		Адрес ред 2 :<input type = "text" name="address2"><br>
		Пощенски Код * :<input type ="number" name="ZipCode"><br>
		Населено Място * :<input type = "text" name="city"><br>
		Област * :<input type = "text" name="province"><br>
		Държава :<input type = "text" name="country"><br>
		Добави : <input type = "submit" name="submit" value = "submit"><BR>
		Добави с нов Адрес :<input type="submit" name="novadres" value="submit"><br>




		
	</form>
	<a href="index.php">Първа Стъпка</a>
	<a href="notes.php">Следваща Стъпка</a>

	


	

</body>
</html>

