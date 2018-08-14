<?php  
			include 'connection.php';
			session_start();
			$addressinfo=array();
			$addressinfo['adr1']=$_POST['address']." ".$_POST['address2'];	
			$addressinfo['adr2']=$_POST['address2'];
			$addressinfo['zip']=$_POST['ZipCode'];
			$addressinfo['city']=$_POST['city'];
			$addressinfo['provinciq']=$_POST['province'];
			$addressinfo['durjava']=$_POST['country'];
			$_SESSION['addressinfo']=$addressinfo;


			if (isset($_POST['submit'])) {
				if (empty($_POST['address']) || empty($_POST['ZipCode']) || empty($_POST['city']) || empty($_POST['province']) ) {
					echo "Lipsvat danni";
					$greshka =   "<script> location.href='Error.php'; </script>";
					sleep(3);
					echo $greshka;

					
					}else {
				header("refresh:0 ; url=notes.php");
				
			}
			
		}
		

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
		
		Адрес ред 1 * :<input type="text" name="address" value="<?php echo $addressinfo['adr1']; ?>"><br>
		Адрес ред 2  :<input type = "text" name="address2" value="<?php echo $addressinfo['adr2']; ?>"><br>
		Пощенски Код * :<input type ="number" name="ZipCode" value="<?php echo $addressinfo['zip']; ?>"><br>
		Населено Място * :<input type = "text" name="city" value="<?php echo $addressinfo['city']; ?>"><br>
		Област * :<input type = "text" name="province" value="<?php echo $addressinfo['provinciq']; ?>"><br>
		Държава :<input type = "text" name="country" value="<?php echo $addressinfo['durjava']; ?>"><br>

		




		
	</form>
	<h1>Нов адрес</h1>
	<form action="insert2adres.php" method="post">
		
	
		Адрес ред 1 * :<input type="text" name="address1" value=""><br>
		Адрес ред 2 :<input type = "text" name="address22" value=""><br>
		Пощенски Код * :<input type ="number" name="ZipCode1" value=""><br>
		Населено Място * :<input type = "text" name="city1" value=""><br>
		Област * :<input type = "text" name="province1" value=""><br>
		Държава :<input type = "text" name="country1" value=""><br>
		Добави новия адрес:<input type="submit" name="dobavi" >





		
	</form>
	<a href="index.php">Първа Стъпка</a>
	<a href="index2.php">Предна стъпка</a>
	<a href="notes.php">Следваща Стъпка</a>
	



	

</body>
</html>	