<?php
	include 'dbConfig.php';
	if(isset($_POST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$passmd5 = md5($password);
		
		
	$stmt = $DB_con->prepare('INSERT INTO admin(UserName,Password) 
					VALUES(:username, :pass)');
					$stmt->bindParam(':username',$username);
					$stmt->bindParam(':pass',$passmd5);
					
					$a = $stmt->execute();
					if($a)
					{
						echo "inserted successfully";
					}
					else{
						echo "not inserted";
					}
	}		
?>

<html>
	<head><title>Registration Page</title></head>
	
	<body>
				
		<form action="" method="post" enctype="multipart/form-data">
			<input type="text" name="username" placeholder="Enter UserName">
			<input type="password" name="password" placeholder="Enter Password">
			
			<input type="submit" name="submit" value="submit">
		</form>
		
	
	</body>

</html>