<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dbConfig.php';
	
	if(isset($_POST['submit']))
	{
		$HeadingId = $_POST['HeadingId'];
		$HeadingName = $_POST['HeadingName'];
		$HeadingTitle = $_POST['HeadingTitle'];
		$HeadingStatus = $_POST['HeadingStatus'];
		$HeadingDescription = $_POST['HeadingDescription'];
		var_dump($HeadingId);
		var_dump($HeadingName);
		var_dump($HeadingTitle);
		var_dump($HeadingStatus);
		var_dump($HeadingDescription);
		
		$imgFile = $_FILES['Image']['name'];
		$tmp_dir = $_FILES['Image']['tmp_name'];
		$imgSize = $_FILES['Image']['size'];
		
		
		if(empty($HeadingId)){
			$errMSG = "Please EnterHeadingId ";
		}
		else if(empty($HeadingName)){
			$errMSG = "Please Enter HeadingName";
		}
		else if(empty($HeadingTitle)){
			$errMSG = "Please Enter HeadingTitle.";
		}
		else if(empty($HeadingStatus)){
			$errMSG = "Please Enter HeadingStatus.";
		}
		
		else if(empty($HeadingDescription)){
			$errMSG = "Please Enter HeadingDescription.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$UserPic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$UserPic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
			//echo "i am in";
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			echo "i am in";
			$stmt = $DB_con->prepare('INSERT INTO heading(ParentId,HeadingDesc,Status,HeadingTitle) 
					VALUES(:headingid, :headingdesc, :status, :headingtitle)');
			$stmt->bindParam(':headingid',$HeadingId);
			$stmt->bindParam(':headingdesc',$HeadingName);
			$stmt->bindParam(':status',$HeadingStatus);
			$stmt->bindParam(':headingtitle',$HeadingTitle);
			$a = $stmt->execute();
			
			
			
			
			
			$stmt1 = $DB_con->prepare('INSERT INTO image(ParentId,UserPic,Status) 
					VALUES(:headingid, :upic, :status)');
			$stmt1->bindParam(':headingid',$HeadingId);
			$stmt1->bindParam(':upic',$UserPic);
			$stmt1->bindParam(':status',$HeadingStatus);
			$b = $stmt1->execute();
			
			
			
			$stmt2 = $DB_con->prepare('INSERT INTO description(ParentId,ContentDesc,Status,HeadingTitle) 
					VALUES(:headingid, :headingdesc, :status, :headingtitle)');
			$stmt2->bindParam(':headingid',$HeadingId);
			$stmt2->bindParam(':headingdesc',$HeadingDescription);
			$stmt2->bindParam(':status',$HeadingStatus);
			$stmt2->bindParam(':headingtitle',$HeadingTitle);
			$c = $stmt2->execute();
			
			
			
			if(($a && $b && $c )=== TRUE)
					{
						echo "New record successfully inserted";
					}
					else
					{
						echo "Not inserted";
					}
		}
	}
?>