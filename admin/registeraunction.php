<?php
session_start();
require("config.php");
error_reporting(0);
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>


<?php 
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['insert']))
{
	$auction_name=$_REQUEST['auction_name'];
	$startdate=$_REQUEST['startdate'];
    $enddate=$_REQUEST['enddate'];
	$no_of_house_auction=$_REQUEST['no_of_house_auction'];
	$city=$_REQUEST['city'];
	
	if(!empty($auction_name) && !empty($startdate) && !empty($enddate)  && !empty(no_of_house_auction) && !empty($city))
	{
		$sql="insert into auction (auction_name,start_date,end_date,no_of_house_auction,city) values('$auction_name','$startdate','$enddate','$no_of_house_auction','$city')";
		$result=mysqli_query($con,$sql);
		if($result)
			{
				$msg='Auction created Successfully';
				
						
			}
			else
			{
				$error='* Auction does not created Try Again';
			}
	}
	else{
		$error="* Please Fill all the Fields!";
	}
	
	
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Add auction</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	<?php include('header.php'); ?>
	
		<!-- Main Wrapper -->
        <div class="page-wrappers login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1> create</h1>
								<p class="account-subtitle">create auction</p>
								<p style="color:red;"><?php echo $error; ?></p>
								<p style="color:green;"><?php echo $msg; ?></p>
								<!-- Form -->
								<form method="post">
									<div class="form-group">
                                    <input class="form-control" type="text" placeholder="Auction Name:" name="auction_name" required>
    
									</div>
									<div class="form-group">
                                    <h6>Startdate:</h6>
                                    <input class="form-control" type="date" placeholder="startdate" name="startdate" required>
									</div>
									<div class="form-group">
                                    <h6>Enddate:</h6>
                                    <input class="form-control" type="date" placeholder="enddate" name="enddate" required>
									</div>
									<div class="form-group">
										<input class="form-control" type="number"  placeholder="No of Houses Auction:" name="no_of_house_auction" required>
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="City of auction" name="city" required>
									</div>
									<div class="form-group mb-0">
										<input class="btn btn-primary btn-block" type="submit" name="insert" Value="Register">
									</div>
								</form>
								<!-- /Form -->
								
								
								
								<!-- Social Login -->
								<!-- <div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
									<a href="#" class="google"><i class="fa fa-google"></i></a>
									<a href="#" class="facebook"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google"><i class="fa fa-instagram"></i></a>
								</div> -->
								<!-- /Social Login -->
								
								<!-- <div class="text-center dont-have">Already have an account? <a href="index.php">Login</a></div> -->
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>

</html>