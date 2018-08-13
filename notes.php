<?php 
	include 'connection.php';
		$noteinfo = array();
	$noteinfo['note'] = $_POST['note'];
	$_SESSION['noteinfo'] = $noteinfo;		

 ?>

<html>
<head>
	<title>Бележките</title>
	<style>
body {background-color: grey} ;
</style>
</head>
<body>
	<form method="post" action="notes2.php">
   Коментар * : <textarea  name="note"></textarea>
   <input type="submit" name="submit" value="Край" id="submit"/>



	
</form>
<form method="post" action="insertExtraNote.php">
	 <input type="submit" name="extraNote" value="Добави Нова бележка">
</form>
	<a href="index2.php">Предишна стъпка</a>
	


</body>
</html>