<?php 
		include 'connection.php';
			session_start();
		
			var_dump($addressinfo);
			
	


 ?>
<html>
<head>
	<title>Добавяне на Aдрес на Потребител</title>
	<style>
body {background-color: grey} ;
</style>
</head>
<body>
	<form action="insert2.php" method="post">
		
		Адрес 1 * :<input type="text" name="address" value="<?php echo $addressinfo['adr1']; ?>"><br>
		Адрес 2 :<input type = "text" name="address2"><br>
		Пощенски Код * :<input type ="number" name="ZipCode"><br>
		Населено Място * :<input type = "text" name="city"><br>
		Област * :<input type = "text" name="province"><br>
		Държава :<input type = "text" name="country"><br>
		Добави : <input type = "submit" name="submit" value = "submit"><BR>
		Добави с нов Адрес :<input type="submit" name="novadres" value="submit"><br>




		
	</form>
	
	<form action="insert2adres.php" method="post">
		
	
		Адрес 2 :<input type = "text" name="address22"><br>
		Добави : <input type = "submit" name="submit" value = "submit"><BR>




		
	</form>
	<a href="index.php">Първа Стъпка</a>
	<a href="index2.php">Предна стъпка</a>
	<a href="notes.php">Следваща Стъпка</a>
	



	

</body>
</html>