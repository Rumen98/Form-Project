<?php 
			include 'connection.php';
		
	
			
	
	


$sql="SELECT * FROM addresses left join users on address_id=user_id left join notes on note_id=user_id ORDER BY address_id DESC LIMIT 1 ;";

$result=mysqli_query($conn,$sql);






 ?>
 	<html>
 <head>
 	<title>Profile</title>
 </head>
 <body>
 	<div>
 		<table class="table table-resposive" border="2">
 <tr>
 <th>ID на Потребителя</th>
 <th>Име на Потребителя</th>
 <th>Имейл на Потребителя</th>
 <th>Адрес на Потребителя</th>
 <th>2ри Адрес на Потребителя</th>
 <th>Телефонен Номер на Потребителя</th>
 <th>Бележки на потребителите</th>

 </tr>

 <?php 
 if (mysqli_num_rows($result) > 0) {
 	
 while ($row = mysqli_fetch_array($result)) {
 	
 ?> 
 <tr>
 <td><?php echo $row["user_id"]; ?></td>
 <td><?php echo $row["user_fname"] . "  " . $row["user_lname"] ?></td>
 <td><?php echo $row["user_email"]; ?></td>
 <td><?php echo $row["address_line_1"]; ?></td>
  <td><?php echo $row["address_line_2"]; ?></td>
  <td><?php echo $row["user_phone"]; ?></td>
  <td><?php echo $row["note_text"]; ?></td>
 </tr>
 
 <?php 
 }
 }

 
 
 header("refresh:10 ; Location:index.php");
 ?>
 	</div>
<a href="update.php">Промяна на данни</a>
<br>
 <a href="exit.php">Exit</a>
 





 
 </body>
 </html>