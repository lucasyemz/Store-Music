<?php
	
session_start();
	$db = mysqli_connect('localhost','root','','datamusic');
$user =	$_POST['emaillogin'];
$pass =	$_POST['passwordlogin'];		

		
		$sql2 = "SELECT `email`, `password`,`function` FROM  usuarios WHERE email = '$user' AND password = '$pass' AND function ='Admin' ";
			$result2 = $connection->query($sql2);
			$count2 = mysqli_num_rows($result2);
			if ($count2 == 1){
				$_SESSION['email'] = $user;
				$_SESSION['password'] = $pass;
		header('location: Login-Admin.php');
				
			}
		
		else{
		unset($_SESSION['email']);
		unset($_SESSION['password']);
			$sql = "SELECT `email`, `password`,`function` FROM  usuarios WHERE email = '$user' AND password = '$pass' AND function = 'Cood' ";
			$result = $connection->query($sql);
			$count = mysqli_num_rows($result);
						if ($count == 1){
							$_SESSION['user'] = $user;
								$_SESSION['password'] = $pass;
							
							$_SESSION['name'] = $count['name'];
							
		
}									else{
											unset($_SESSION['user']);
											unset($_SESSION['password']);
											session_destroy();
											header('location: Login.php');
					}
			
			}
	
	

			
			
	
	
	?>