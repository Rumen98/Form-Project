	<?php  
			include 'connection.php';
			session_start();
			$userinfo=array();
			$userinfo['fname']=$_POST['Fname'];
			$userinfo['mname']=$_POST['Mname'];
			$userinfo['lname']=$_POST['Lname'];
			$userinfo['login']=$_POST['login'];
			$userinfo['email']=$_POST['email'];
			$userinfo['phone']=$_POST['phone'];
			$_SESSION['userinfo']=$userinfo;
			

			if (isset($_POST['submit'])) {
				if (empty($_POST['email'])) {
					echo "Lipsva Email";
					echo $email;
				}elseif (empty($_POST['login'])) {
					echo "Lipsva Nickname";
					echo $login;
				}elseif (empty($_POST['Lname'])) {
				    echo "Lipsva Familiq";	
				    echo $lname;	
				}else{
					
				header("refresh:0 ; url=index2.php");
				}

			}else{
				echo "Greshka dickhead";
			}
			



			
			
		
			
			

	?>