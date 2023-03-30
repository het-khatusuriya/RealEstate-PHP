<?php
require("config.php");
////code

?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ongoing auctions</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="admin\assets\img\favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="admin\assets\css\bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="admin\assets\css\font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="admin\assets\css\feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="C:\wamp64\www\RealEstate-PHP\admin\assets\plugins\datatables\dataTables.bootstrap4.min.css"> 
		<link rel="stylesheet" href="C:\wamp64\www\RealEstate-PHP\admin\assets\plugins\datatables\responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="C:\wamp64\www\RealEstate-PHP\admin\assets\plugins\datatables\select.bootstrap4.min.css">
		<link rel="stylesheet" href="C:\wamp64\www\RealEstate-PHP\admin\assets\plugins\datatables\buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="C:\wamp64\www\RealEstate-PHP\admin\assets\css\style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
	<div>
	<?php include("include/header.php");?>
		<!-- Main Wrapper -->
		
		
			<!-- Header -->

			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<br>
								<h3 class="page-title">Auction</h3>
								
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Auction List</h4>
									
									<?php 
										if(isset($_GET['msg']))	
										echo $_GET['msg'];	
									?>
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Auction name</th>
                                                    <th>Startdate</th>
                                                    <th>Enddate</th>
                                                    <th>No of house auction</th>
													<th>city</th>
                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
											<?php
													
												$query=mysqli_query($con,"select * from auction");
												$cnt=1;
												while($row=mysqli_fetch_row($query))
													{
											?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $row['1']; ?></td>
                                                    <td><?php echo $row['2']; ?></td>
                                                    <td><?php echo $row['3']; ?></td>
                                                    <td><?php echo $row['4']; ?></td>
                                                    <td><?php echo $row['5']; ?></td>
				
                                             
                                                </tr>
                                                <?php
												$cnt=$cnt+1;
												} 
												?>
                                               
                                            </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="admin\assets\js\jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="admin\assets\js\popper.min.js"></script>
        <script src="admin\assets\js\bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="admin\assets\plugins\slimscroll\jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="admin\assets\plugins\datatables\jquery.dataTables.min.js"></script>
		<script src="admin\assets\plugins\datatables\dataTables.bootstrap4.min.js"></script>
		<script src="admin\assets\plugins\datatables\dataTables.responsive.min.js"></script>
		<script src="admin\assets\plugins\datatables\responsive.bootstrap4.min.js"></script>
		
		<script src="admin\assets\plugins\datatables\dataTables.select.min.js"></script>
		
		<script src="admin\assets\plugins\datatables\dataTables.buttons.min.js"></script>
		<script src="admin\assets\plugins\datatables\buttons.bootstrap4.min.js"></script>
		<script src="admin\assets\plugins\datatables\buttons.html5.min.js"></script>
		<script src="admin\assets\plugins\datatables\buttons.flash.min.js"></script>
		<script src="admin\assets\plugins\datatables\buttons.print.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="admin\assets\js\script.js"></script>
											</div>
    </body>
</html>
