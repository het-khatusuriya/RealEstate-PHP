<style>
    .navbarcss{
        font-size: 20px;
    }
</style>
<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">  



            <div class="main-nav secondary-nav hover-success-nav py-2">
               
            <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="C:\wamp64\www\RealEstate-PHP\images\logo\hlogo.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto hover-text-primary navbarcss" >
                                        <li class="nav-item dropdown" style="font-size: 40px;"> <a class="nav-link hover" href="index.php" role="button" aria-haspopup="true" aria-expanded="false"><h5>Home</h5></a></li>
										
										<li class="nav-item" style="font-size: 40px;"> <a class="nav-link" href="about.php"><h5>About</h5></a> </li>
										
                                        <li class="nav-item" style="font-size: 40px;"> <a class="nav-link" href="contact.php"><h5>Contact</h5></a> </li>										
										
                                        <li class="nav-item"> <a class="nav-link" href="property.php"><h5>Properties</h5></a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="auction.php"><h5>Auction</h5></a> </li>
                                        <!-- <li class="nav-item"> <a class="nav-link" href="agent.php">Agent</a> </li> -->

										

                                        
										<?php  if(isset($_SESSION['uemail']))
										{ ?>
                                        
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="profile.php">Profile</a> </li>
												<!-- <li class="nav-item"> <a class="nav-link" href="request.php">Property Request</a> </li> -->
												<li class="nav-item"> <a class="nav-link" href="feature.php">Your Property</a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>	
                                                <li><a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="submitproperty.php">Add Property</a> 
                                </div></li>
											</ul>
                                        </li>
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php"><h5>Login/Register</h5></a> </li>
										<?php } ?>
										
                                    </ul>
                                    
									
									
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>