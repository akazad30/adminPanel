
		
<?php	
		
				include 'dbConfig.php';
				
				if(isset($_POST['submit'])){
			
				$username = $_POST['name'];
				$password = md5($_POST['pass']);

											$stmt = $DB_con->prepare("select UserName,Password from admin where UserName = '".$_POST['name']."' and Password = '".md5($_POST['pass'])."' ");
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														if( ($row['UserName'] == $_POST['name']) && ($row['Password']== md5($_POST['pass'])) )
														{
															include 'managemenu.php';
														}
														

													}
											}
											
											else
														{
															include 'index.php';
														}
											
				}
?>
									
				
		

		
