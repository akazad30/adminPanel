<?php
	require_once 'dbConfig.php';
?>
<!DOCTYPE html>

<?php
												if(isset($_GET['heading_id'])){
												  $var = $_GET['heading_id']; //Get Menu Name
												   //echo $var ;
												

												}
											?>
											
<html>
	<head><title>Edit Menu Page</title></head>
	<body>
		<form name="EditMenuForm" action="EditMenuPageWithOrder.php" method="post">
			<input type="text" name="MenuName" value="<?php
												if(isset($_GET['menu_name'])){
												  $var = $_GET['menu_name']; //Get Menu Name
												   echo $var ;
												

												}
											?>">
											
				<select name="MenuNameOder">
						<option selected disabled>--Select Menu Order--</option>
							
								<?php 
										if(isset($_GET['ParentId'])){
											$var = $_GET['ParentId'];
											//var_dump ($var);
								
													$stmt = $DB_con->prepare("SELECT HeadingId from heading where ParentId = '".$_GET['ParentId']."' ");
													$stmt->execute();
													if($stmt->rowCount() > 0)
													{
														while($row=$stmt->fetch(PDO::FETCH_ASSOC))
															{
																extract($row);
															
																?>
																<option value="<?php echo $row['HeadingId']; ?>"><?php echo $row['HeadingId']; ?></option>
																
																	<?php
															}
													}
										}
													//echo $row['galleryName']; 
								?>
						
						</select>
			<input type="submit" name="submit" value="submit">
		</form>
		
	</body>

</html>