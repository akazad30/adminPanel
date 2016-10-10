<?php
require_once 'dbConfig.php';

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel Obaidul Quader </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Obaidul Quader</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">

			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}" ><a href="index.php">LogOut</a>
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
 
                        <li>
                            <a href="managemenu.php"><i class="fa fa-flask nav_icon"></i>Manage Menu</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="widget_head">Manage Menu</div>
		 
		   <div class="widget_1">
		   
					<table class="table table-bordered" style="width:600px;height:100px;margin-left:200px;margin-bottom:200px">
					  <thead>
						<tr>
						  <th>SerialNo</th>
						  <th>Content Title</th>
						  <th>Action</th>
						</tr>
					  </thead>
					  <tbody>
							<tr>
						
						  <th scope="row">1</th>
								<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 6 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Home</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>	<a href="#">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	 	 
						
						</tr>
						
						<tr>
					
						
						  <th scope="row">2</th>
								<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 6 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Logo</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>	<a href="#">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	 	 
						
						</tr>
						
							<tr>
						
						  <th scope="row">3</th>
								<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 6 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Slider</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>	<a href="#">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	 	 
						
						</tr>
							<tr>
						
						  <th scope="row">4</th>
								<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 6 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Contact Us</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>	<a href="#">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	 	 
						
						</tr>
						
							<tr>
						
						  <th scope="row">5</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 6 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Account</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>	<a href="#">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	  
						
						</tr>
						<tr>
						
						  <th scope="row">6</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 6 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="menu-about-us.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">About Obaidul Quader</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 6 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="EditMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>
														<a href="DeleteMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	  
						
						</tr>
						<tr>
						
						  <th scope="row">7</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 7 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="latest-update.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Latest Update</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 7 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="EditMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>
														<a href="DeleteMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	 
						
						</tr>
							<tr>
						
						  <th scope="row">8</th>
								<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 8 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="AchievementsMenu.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Achievement</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
								
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 8 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="EditMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>
														<a href="DeleteMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>		 
						
						</tr>
							<tr>
						
						  <th scope="row">9</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 9 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="InnovationMenu.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Innovation</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
								
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 9 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="EditMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>
														<a href="DeleteMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	

						</tr>
							<tr>
						
						  <th scope="row">10</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 10 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="PoliticalResumeMenu.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Political Resume</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
									
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 10 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="EditMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>
														<a href="DeleteMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>		 
						
						</tr>
						<tr>
						
						  <th scope="row">11</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 11 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="SocialConnectMenu.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Social Connect</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 11 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="EditMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>
														<a href="DeleteMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>		 
						
						</tr>
							<tr>
						
						  <th scope="row">12</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Gallery</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>	<a href="#">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	  
						
						</tr>
							<tr>
						
						  <th scope="row">13</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="ScreenShotGalleryMenu.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Screenshot Gallery</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="EditMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>
														<a href="DeleteMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>		 
						
						</tr>
							<tr>
						
						  <th scope="row">14</th>
								<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 9 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Education</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 12 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>	<a href="#">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	 	 
						
						</tr>
			
							<tr>
						
						  <th scope="row">15</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 41 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="DownloadTheAppMenu.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Download The Book</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
						
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 41 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="EditMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>
														<a href="DeleteMenuPage.php?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Delete</a>
														
														
														
															<?php
													}
											}
									?>

								</td>
							</form>	 
						
						</tr>
									<tr>
						
						  <th scope="row">16</th>
							<form method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 9 LIMIT 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Footer</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form>
							<form name="" method="post" action="">
								<td>
								<?php				
											$stmt = $DB_con->prepare('SELECT HeadingDesc,HeadingId,ParentId,DateColumn from heading WHERE ParentId = 9 limit 1 ');
											$stmt->execute();
											if($stmt->rowCount() > 0)
											{
												while($row=$stmt->fetch(PDO::FETCH_ASSOC))
													{
														extract($row);
														?>
														
														<a href="#?ParentId=<?php echo $ParentId;?>&menu_name=<?php echo $HeadingDesc;?>&heading_id=<?php echo $HeadingId ?>&date_column=<?php echo $DateColumn?>">Edit</a>	<a href="#">Delete</a>
														
														
															<?php
													}
											}
									?>

								</td>
							</form> 
						
						</tr>
						
					  </tbody>
					</table>
					
			</div>
		   
		   <div class="widget_2">
		   	

		   </div>


		   <div class="widget_4">
	
		   </div>
		   <div class="widget_5">

             <div class="col-md-6 widget_1_box2">
		   	 
             </div>
		     <div class="clearfix"> </div>
		   </div>
	
	  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
