<?php
  require_once 'dbConfig.php';
?>


<!-- Database Connection -->


<!-- Get ContentDesc based on MenuID that is ParentId -->
<?php
				if(isset($_GET['ParentId'])){
				$var = $_GET['ParentId']; //Get Menu Name
				   echo $var ;
				
				
				$stmt = $DB_con->prepare("SELECT ContentDesc from description where ParentId = '".$_GET['ParentId']."' LIMIT 1 ");
				$stmt->execute();
				if($stmt->rowCount() > 0)
				{
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						{
							extract($row);
							?>
							<h1><?php echo $ContentDesc." "; ?></h1>
								<?php
						}
				}
			
								
								
		}
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel For Obaidul Quader</title>
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
<script src="ckeditor/ckeditor.js"></script>
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

			    <li class="dropdown">

	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
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
	        <div class="widget_head">Delete Menu <a href="#"><?php
				if(isset($_POST['MenuName'])){
				  $var = $_POST['MenuName']; //Get Menu Name
				   echo $var ;
				

				}
				?>
				</a>
		    </div>
		 
		   <div class="widget_1">
				<?php
					 if(isset($_POST['submit']))
					 {
						$menuName = $_POST['MenuName'];
						$menuOrder = $_POST['MenuNameOder'];
						$stmt = $DB_con->prepare("DELETE  FROM heading where HeadingId = '".$_POST['MenuNameOder']."'  ");
						$a = $stmt->execute();
						
						$menuName = $_POST['MenuName'];
						$menuOrder = $_POST['MenuNameOder'];
						$stmt = $DB_con->prepare("DELETE  FROM heading where HeadingId = '".$_POST['MenuNameOder']."'  ");
						$b = $stmt->execute();
						
						
						$menuName = $_POST['MenuName'];
						$menuOrder = $_POST['MenuNameOder'];
						$stmt = $DB_con->prepare("DELETE  FROM heading where HeadingId = '".$_POST['MenuNameOder']."'  ");
						$c = $stmt->execute();
						
						
						
						
						
						
						
						if(($a && $b && $c) == TRUE)
						{
							echo "Deleted Successfully" .$menuName.$menuOrder;
						}
						else
						{
							echo "Failed to delete";
						}
						 
						
					 }

				?>
					
			</div>

		   <div class="widget_3">

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

