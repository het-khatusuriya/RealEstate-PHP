<?php
session_start();
error_reporting(0);
$id=$_REQUEST['id'];
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

if(isset($_POST['sumbit']))
                                  
{

    $startdate = $_POST["startdate"];
	$enddate = $_POST["enddate"];
    $qry = "update auction set start_date='$startdate', end_date='$enddate' where id='$id'";
				$result = mysqli_query($con,$qry); //query executes

                if($result == true)
                {
                    $msg="<p class='alert alert-success'>Details Updated</p>";
                    header("Location:auctionlist.php?msg=$msg");
                }
                else{
                    $msg="<p class='alert alert-warning'>Details Not Updated</p>";
                    header("Location:auctionlist.php?msg=$msg");
                }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Housefinder</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Auction</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">auction</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Update auction Details</h4>
									<!-- <?php echo $error; ?> -->
									<!-- <?php echo $msg; ?> -->
								</div>
							
								
								
												
								<div class="card-body">
									<h5 class="card-title">auction Detail</h5>
                                    <div class="form-group row">
													
                                    <?php
include 'C:\wamp64\www\RealEstate-PHP\config.php';
$qry= "select * from auction where id='$id'";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){

    ?>



    <form  method="post" enctype="multipart/form-data">

    <div class="form-group">
                                            <label>Change Enddate <span style="color: red;">*</span></label>
                                            <input style="width: 100%" class="form-control" name="startdate" type="date" value='<?php echo $row['start_date']; ?>' required>
                                        </div>
                                        <div class="form-group">
                                            <label>Change Startdate <span style="color: red;">*</span></label>
                                            <input style="width: 100%" class="form-control" type="date" name="enddate" value='<?php echo $row['end_date'];   ?>' required >
                                        </div>

                                        <!-- <input type="hidden" name="id" value="<?php echo $row['id'];?>">               -->
                                    
                                
                                        
                
                                    
                                    <button type="submit" name="sumbit" class="btn btn-success">Make Changes</button>
                                    
    </form>


<?php

    
}

?>  



































												</div>
						
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>