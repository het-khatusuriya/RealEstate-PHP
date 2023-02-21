<?php
session_start();
$id=$_REQUEST['id'];
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

if(isset($_POST['sumbit']))
                                  
{

    $uemail = $_POST["uemail"];
	$uphone = $_POST["uphone"];
    $qry = "update user set uemail='$uemail', uphone='$uphone' where uid='$id'";
				$result = mysqli_query($con,$qry); //query executes

                if($result == true)
                {
                    $msg="<p class='alert alert-success'>Details Updated</p>";
                    header("Location:userbuilder.php?msg=$msg");
                }
                else{
                    $msg="<p class='alert alert-warning'>Details Not Updated</p>";
                    header("Location:userbuilder.php?msg=$msg");
                }
}




//// code insert
//// add code
// $error="";
// $msg="";
// if(isset($_POST['add']))
// {

// 	$email=$_REQUEST['email'];
// 	$phone=$_REQUEST['phone'];
	
	
// 	$sql = "UPDATE user SET email= '{$email}', phone= '{$phone}' ";
	
// 	$result=mysqli_query($con,$sql);
// 	if($result == true)
// 	{
// 		$msg="<p class='alert alert-success'>Details Updated</p>";
// 		header("Location:userlist.php?msg=$msg");
// 	}
// 	else{
// 		$msg="<p class='alert alert-warning'>user Not Updated</p>";
// 		header("Location:userlist.php?msg=$msg");
// 	}
// }
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
								<h3 class="page-title">Seller</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Seller</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Update Seller Details</h4>
									<!-- <?php echo $error; ?> -->
									<!-- <?php echo $msg; ?> -->
								</div>
							
								
								
												
								<div class="card-body">
									<h5 class="card-title">Seller Detail</h5>
                                    <div class="form-group row">
													
                                    <?php
include 'C:\wamp64\www\RealEstate-PHP\config.php';
$qry= "select * from user where uid='$id'";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){

    ?>



    <form  method="post" enctype="multipart/form-data">

    <div class="form-group">
                                            <label>Change Email <span style="color: red;">*</span></label>
                                            <input style="width: 100%" class="form-control" name="uemail" type="text" value='<?php echo $row['uemail']; ?>' required>
                                        </div>
                                        <div class="form-group">
                                            <label>Change Contact Number <span style="color: red;">*</span></label>
                                            <input style="width: 100%" class="form-control" type="text" name="uphone" value='<?php echo $row['uphone'];   ?>' required >
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