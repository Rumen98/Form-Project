<?php 

	session_start();
	include 'connection.php';	
	
 ?>


<html>
<head>		
 
		 <meta charset="utf-8">
		
	<title>Добавяне на Потребител</title>
		<style>
			body {background-color: grey} ;
		</style>
</head>

<body> 

	<form action="insert.php" method="post" name="formu" id="formu">
		Собствено Име : <input type ="text" name ="Fname"><br>
		
		Бащино Име : <input type ="text" name ="Mname"><br>

		Фамилия * : <input type ="text" name ="Lname"><br>
		

		Потребителско Име * : <input type ="text" name ="login"><br>
		

		Електронна Поща *: <input type ="text" name ="email"><br>
	

		Телефон : <input type ="number" name ="phone"><br>

		Запис : <input type="submit" name="submit" value="submit"> 
	</form>

	<a href="index2.php" >Следваща Стъпка</a>
	


	

</body>

</html>











