<?php  
			include 'connection.php';
			if (isset($_POST['dobavi'])) {
			$extraAddress=array();
			$extraAddress['adres']=$_POST['address1']." ".$_POST['address22'];
			$extraAddress['zip']=$_POST['ZipCode1'];
			$extraAddress['city']=$_POST['city1'];
			$extraAddress['provinciq1']=$_POST['province1'];
			$extraAddress['country']=$_POST['country1'];
			$_SESSION['extraAddress']=$extraAddress;

			header("Location:notes.php");
		}

			
			
			

			

	?>