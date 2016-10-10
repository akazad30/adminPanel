<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dbConfig.php';
	
	if(isset($_POST['submit']))
	{
		$ParentId = $_POST['ParentId'];
		//var_dump($ParentId);
		$HeadingName = $_POST['HeadingName'];
		//var_dump($HeadingName);
		$HeadingTitle = $_POST['HeadingTitle'];
		//var_dump($HeadingTitle);
		$HeadingStatus = $_POST['HeadingStatus'];
		//var_dump($HeadingStatus);
		$HeadingDescription = $_POST['HeadingDescription'];
		//var_dump($HeadingDescription);
		
		$HeadingDuplicate = $_POST['ParentIdduplicate'];
		//var_dump($HeadingDuplicate);
		
		
		
		$imgFile = $_FILES['Image']['name'];
		$tmp_dir = $_FILES['Image']['tmp_name'];
		$imgSize = $_FILES['Image']['size'];
		
		
		if(empty($ParentId)){
			$errMSG = "Please EnterParentId ";
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
		
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			//echo "i am in";
			
			$p = "UPDATE heading SET HeadingDesc=:headingdesc, Status=:status, HeadingTitle=:headingtitle WHERE ParentId= '".$_POST['ParentId']."' ";
					$query = $DB_con->prepare($p);
					$query->execute(array(
						':headingdesc'     => $HeadingName,
						':status'   => $HeadingStatus,
						':headingtitle'    => $HeadingTitle
						//':pID'   => $ParentId
					));
					
				
				$q = "UPDATE description SET ContentDesc=:headingdesc, Status=:status, HeadingTitle=:headingtitle WHERE ParentId= '".$_POST['ParentId']."' ";
					$query = $DB_con->prepare($q);
					$query->execute(array(
						':headingdesc'     => $HeadingName,
						':status'   => $HeadingStatus,
						':headingtitle'    => $HeadingTitle
						//':pID'   => $ParentId
					));
					
					
					
				$r = "UPDATE image SET UserPic=:upic, Status=:status WHERE ParentId= '".$_POST['ParentId']."' ";
					$query = $DB_con->prepare($r);
					$query->execute(array(
						':upic'     => $UserPic,
						':status'   => $HeadingStatus
						//':pID'   => $ParentId
					));
					
					if(($p &&$q && $r)== TRUE)
					{
						echo "Updated data successfully";
					}
					else
					{
						echo "Updated data failed";
					}
					
			
			/*
			
			$stmt1 = $DB_con->prepare('INSERT INTO image(ParentId,UserPic,Status) 
					VALUES(:ParentId, :upic, :status)');
			$stmt1->bindParam(':ParentId',$ParentId);
			$stmt1->bindParam(':upic',$UserPic);
			$stmt1->bindParam(':status',$HeadingStatus);
			$b = $stmt1->execute();
			
			
			
			$stmt2 = $DB_con->prepare('INSERT INTO description(ParentId,ContentDesc,Status,HeadingTitle) 
					VALUES(:ParentId, :headingdesc, :status, :headingtitle)');
			$stmt2->bindParam(':ParentId',$ParentId);
			$stmt2->bindParam(':headingdesc',$HeadingDescription);
			$stmt2->bindParam(':status',$HeadingStatus);
			$stmt2->bindParam(':headingtitle',$HeadingTitle);
			$c = $stmt2->execute();
			
			*/
			

		}
		
	}
?>