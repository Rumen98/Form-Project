<?php 
			session_start();

			$servername = "localhost";
			$username = "root";
			$password = "1";
			$database = "phplab_course_project";

			$conn = new mysqli($servername,$username,$password,$database);
			mysqli_query($conn,"SET CHARACTER SET 'utf8'");
			mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
			

			if ($conn->connect_error){
				die("Connection failed" . $conn->connect_error);
			}  
			?>