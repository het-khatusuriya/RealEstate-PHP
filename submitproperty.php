<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

//// code insert
//// add code
$error="";
$msg="";
if(isset($_POST['add']))
{
	
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ptype=$_POST['ptype'];
	$bhk=$_POST['bhk'];
	$bed=$_POST['bed'];
	$balc=$_POST['balc'];
	$hall=$_POST['hall'];
	$stype=$_POST['stype'];
	$bath=$_POST['bath'];
	$kitc=$_POST['kitc'];
	$floor=$_POST['floor'];
	$price=$_POST['price'];
	$city=$_POST['city'];
	$asize=$_POST['asize'];
	$loc=$_POST['loc'];
	$state=$_POST['state'];
	$status=$_POST['status'];
	$uid=$_SESSION['uid'];
	$feature=$_POST['feature'];
	
	$totalfloor=$_POST['totalfl'];

	$isFeatured=$_POST['isFeatured'];
	
	$aimage=$_FILES['aimage']['name'];
	$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['name'];
	$aimage3=$_FILES['aimage3']['name'];
	$aimage4=$_FILES['aimage4']['name'];
	
	$fimage=$_FILES['fimage']['name'];
	$fimage1=$_FILES['fimage1']['name'];
	$fimage2=$_FILES['fimage2']['name'];
	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];
	$temp_name3 =$_FILES['aimage3']['tmp_name'];
	$temp_name4 =$_FILES['aimage4']['tmp_name'];
	
	$temp_name5 =$_FILES['fimage']['tmp_name'];
	$temp_name6 =$_FILES['fimage1']['tmp_name'];
	$temp_name7 =$_FILES['fimage2']['tmp_name'];
	
	move_uploaded_file($temp_name,"admin/property/$aimage");
	move_uploaded_file($temp_name1,"admin/property/$aimage1");
	move_uploaded_file($temp_name2,"admin/property/$aimage2");
	move_uploaded_file($temp_name3,"admin/property/$aimage3");
	move_uploaded_file($temp_name4,"admin/property/$aimage4");
	
	move_uploaded_file($temp_name5,"admin/property/$fimage");
	move_uploaded_file($temp_name6,"admin/property/$fimage1");
	move_uploaded_file($temp_name7,"admin/property/$fimage2");
	
	$sql="insert into property (title,pcontent,type,bhk,stype,bedroom,bathroom,balcony,kitchen,hall,floor,size,price,location,city,state,feature,pimage,pimage1,pimage2,pimage3,pimage4,uid,status,mapimage,topmapimage,groundmapimage,totalfloor, isFeatured)
	values('$title','$content','$ptype','$bhk','$stype','$bed','$bath','$balc','$kitc','$hall','$floor','$asize','$price',
	'$loc','$city','$state','$feature','$aimage','$aimage1','$aimage2','$aimage3','$aimage4','$uid','$status','$fimage','$fimage1','$fimage2','$totalfloor', '$isFeatured')";
	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Property Inserted Successfully</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Property Not Inserted Some Error</p>";
		}
}							
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Real Estate PHP</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Submit Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Submit Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form method="post" enctype="multipart/form-data">
								<div class="description">
									<h5 class="text-secondary">Basic Information</h5><hr>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Title">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="ptype">
															<option value="">Select Type</option>
															<option value="apartment">Apartment</option>
															<option value="flat">Flat</option>
															<option value="building">Building</option>
															<option value="house">House</option>
															<option value="villa">Villa</option>
															<option value="office">Office</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="stype">
															<option value="">Select Status</option>
															<option value="rent">Rent</option>
															<option value="sale">Sale</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bathroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bath" required placeholder="Enter Bathroom (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Kitchen</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="kitc" required placeholder="Enter Kitchen (only no 1 to 10)">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<select class="form-control" required name="bhk">
															<option value="">Select BHK</option>
															<option value="1 BHK">1 BHK</option>
															<option value="2 BHK">2 BHK</option>
															<option value="3 BHK">3 BHK</option>
															<option value="4 BHK">4 BHK</option>
															<option value="5 BHK">5 BHK</option>
															<option value="1,2 BHK">1,2 BHK</option>
															<option value="2,3 BHK">2,3 BHK</option>
															<option value="2,3,4 BHK">2,3,4 BHK</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bedroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bed" required placeholder="Enter Bedroom  (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Balcony</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="balc" required placeholder="Enter Balcony  (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hall</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="hall" required placeholder="Enter Hall  (only no 1 to 10)">
													</div>
												</div>
												
											</div>
										</div>
										<h5 class="text-secondary">Price & Location</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required name="floor">
															<option value="">Select Floor</option>
															<option value="1st Floor">1st Floor</option>
															<option value="2nd Floor">2nd Floor</option>
															<option value="3rd Floor">3rd Floor</option>
															<option value="4th Floor">4th Floor</option>
															<option value="5th Floor">5th Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price" required placeholder="Enter Price">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<!-- <input type="text"  name="city" required > -->
														<select name="city" class="form-control" placeholder="Enter City">
 
<option value="not"> -- choose city -- </option>
<option value="Adilabad">Adilabad</option>
<option value="Agra">Agra</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Ahmednagar">Ahmednagar</option>
<option value="Aizawl">Aizawl</option>
<option value="Ajitgarh (Mohali)">Ajitgarh (Mohali)</option>
<option value="Ajmer">Ajmer</option>
<option value="Akola">Akola</option>
<option value="Alappuzha">Alappuzha</option>
<option value="Aligarh">Aligarh</option>
<option value="Alirajpur">Alirajpur</option>
<option value="Allahabad">Allahabad</option>
<option value="Almora">Almora</option>
<option value="Alwar">Alwar</option>
<option value="Ambala">Ambala</option>
<option value="Ambedkar Nagar">Ambedkar Nagar</option>
<option value="Amravati">Amravati</option>
<option value="Amreli district">Amreli district</option>
<option value="Amritsar">Amritsar</option>
<option value="Anand">Anand</option>
<option value="Anantapur">Anantapur</option>
<option value="Anantnag">Anantnag</option>
<option value="Angul">Angul</option>
<option value="Anjaw">Anjaw</option>
<option value="Anuppur">Anuppur</option>
<option value="Araria">Araria</option>
<option value="Ariyalur">Ariyalur</option>
<option value="Arwal">Arwal</option>
<option value="Ashok Nagar">Ashok Nagar</option>
<option value="Auraiya">Auraiya</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Azamgarh">Azamgarh</option>
<option value="Badgam">Badgam</option>
<option value="Bagalkot">Bagalkot</option>
<option value="Bageshwar">Bageshwar</option>
<option value="Bagpat">Bagpat</option>
<option value="Bahraich">Bahraich</option>
<option value="Baksa">Baksa</option>
<option value="Balaghat">Balaghat</option>
<option value="Balangir">Balangir</option>
<option value="Balasore">Balasore</option>
<option value="Ballia">Ballia</option>
<option value="Balrampur">Balrampur</option>
<option value="Banaskantha">Banaskantha</option>
<option value="Banda">Banda</option>
<option value="Bandipora">Bandipora</option>
<option value="Bangalore Rural">Bangalore Rural</option>
<option value="Bangalore Urban">Bangalore Urban</option>
<option value="Banka">Banka</option>
<option value="Bankura">Bankura</option>
<option value="Banswara">Banswara</option>
<option value="Barabanki">Barabanki</option>
<option value="Baramulla">Baramulla</option>
<option value="Baran">Baran</option>
<option value="Bardhaman">Bardhaman</option>
<option value="Bareilly">Bareilly</option>
<option value="Bargarh (Baragarh)">Bargarh (Baragarh)</option>
<option value="Barmer">Barmer</option>
<option value="Barnala">Barnala</option>
<option value="Barpeta">Barpeta</option>
<option value="Barwani">Barwani</option>
<option value="Bastar">Bastar</option>
<option value="Basti">Basti</option>
<option value="Bathinda">Bathinda</option>
<option value="Beed">Beed</option>
<option value="Begusarai">Begusarai</option>
<option value="Belgaum">Belgaum</option>
<option value="Bellary">Bellary</option>
<option value="Betul">Betul</option>
<option value="Bhadrak">Bhadrak</option>
<option value="Bhagalpur">Bhagalpur</option>
<option value="Bhandara">Bhandara</option>
<option value="Bharatpur">Bharatpur</option>
<option value="Bharuch">Bharuch</option>
<option value="Bhavnagar">Bhavnagar</option>
<option value="Bhilwara">Bhilwara</option>
<option value="Bhind">Bhind</option>
<option value="Bhiwani">Bhiwani</option>
<option value="Bhojpur">Bhojpur</option>
<option value="Bhopal">Bhopal</option>
<option value="Bidar">Bidar</option>
<option value="Bijapur">Bijapur</option>
<option value="Bijapur">Bijapur</option>
<option value="Bijnor">Bijnor</option>
<option value="Bikaner">Bikaner</option>
<option value="Bilaspur">Bilaspur</option>
<option value="Bilaspur">Bilaspur</option>
<option value="Birbhum">Birbhum</option>
<option value="Bishnupur">Bishnupur</option>
<option value="Bokaro">Bokaro</option>
<option value="Bongaigaon">Bongaigaon</option>
<option value="Boudh (Bauda)">Boudh (Bauda)</option>
<option value="Budaun">Budaun</option>
<option value="Bulandshahr">Bulandshahr</option>
<option value="Buldhana">Buldhana</option>
<option value="Bundi">Bundi</option>
<option value="Burhanpur">Burhanpur</option>
<option value="Buxar">Buxar</option>
<option value="Cachar">Cachar</option>
<option value="Central Delhi">Central Delhi</option>
<option value="Chamarajnagar">Chamarajnagar</option>
<option value="Chamba">Chamba</option>
<option value="Chamoli">Chamoli</option>
<option value="Champawat">Champawat</option>
<option value="Champhai">Champhai</option>
<option value="Chandauli">Chandauli</option>
<option value="Chandel">Chandel</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chandrapur">Chandrapur</option>
<option value="Changlang">Changlang</option>
<option value="Chatra">Chatra</option>
<option value="Chennai">Chennai</option>
<option value="Chhatarpur">Chhatarpur</option>
<option value="Chhatrapati Shahuji Maharaj Nagar">Chhatrapati Shahuji Maharaj Nagar</option>
<option value="Chhindwara">Chhindwara</option>
<option value="Chikkaballapur">Chikkaballapur</option>
<option value="Chikkamagaluru">Chikkamagaluru</option>
<option value="Chirang">Chirang</option>
<option value="Chitradurga">Chitradurga</option>
<option value="Chitrakoot">Chitrakoot</option>
<option value="Chittoor">Chittoor</option>
<option value="Chittorgarh">Chittorgarh</option>
<option value="Churachandpur">Churachandpur</option>
<option value="Churu">Churu</option>
<option value="Coimbatore">Coimbatore</option>
<option value="Cooch Behar">Cooch Behar</option>
<option value="Cuddalore">Cuddalore</option>
<option value="Cuttack">Cuttack</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Dahod">Dahod</option>
<option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
<option value="Dakshina Kannada">Dakshina Kannada</option>
<option value="Daman">Daman</option>
<option value="Damoh">Damoh</option>
<option value="Dantewada">Dantewada</option>
<option value="Darbhanga">Darbhanga</option>
<option value="Darjeeling">Darjeeling</option>
<option value="Darrang">Darrang</option>
<option value="Datia">Datia</option>
<option value="Dausa">Dausa</option>
<option value="Davanagere">Davanagere</option>
<option value="Debagarh (Deogarh)">Debagarh (Deogarh)</option>
<option value="Dehradun">Dehradun</option>
<option value="Deoghar">Deoghar</option>
<option value="Deoria">Deoria</option>
<option value="Dewas">Dewas</option>
<option value="Dhalai">Dhalai</option>
<option value="Dhamtari">Dhamtari</option>
<option value="Dhanbad">Dhanbad</option>
<option value="Dhar">Dhar</option>
<option value="Dharmapuri">Dharmapuri</option>
<option value="Dharwad">Dharwad</option>
<option value="Dhemaji">Dhemaji</option>
<option value="Dhenkanal">Dhenkanal</option>
<option value="Dholpur">Dholpur</option>
<option value="Dhubri">Dhubri</option>
<option value="Dhule">Dhule</option>
<option value="Dibang Valley">Dibang Valley</option>
<option value="Dibrugarh">Dibrugarh</option>
<option value="Dima Hasao">Dima Hasao</option>
<option value="Dimapur">Dimapur</option>
<option value="Dindigul">Dindigul</option>
<option value="Dindori">Dindori</option>
<option value="Diu">Diu</option>
<option value="Doda">Doda</option>
<option value="Dumka">Dumka</option>
<option value="Dungapur">Dungapur</option>
<option value="Durg">Durg</option>
<option value="East Champaran">East Champaran</option>
<option value="East Delhi">East Delhi</option>
<option value="East Garo Hills">East Garo Hills</option>
<option value="East Khasi Hills">East Khasi Hills</option>
<option value="East Siang">East Siang</option>
<option value="East Sikkim">East Sikkim</option>
<option value="East Singhbhum">East Singhbhum</option>
<option value="Eluru">Eluru</option>
<option value="Ernakulam">Ernakulam</option>
<option value="Erode">Erode</option>
<option value="Etah">Etah</option>
<option value="Etawah">Etawah</option>
<option value="Faizabad">Faizabad</option>
<option value="Faridabad">Faridabad</option>
<option value="Faridkot">Faridkot</option>
<option value="Farrukhabad">Farrukhabad</option>
<option value="Fatehabad">Fatehabad</option>
<option value="Fatehgarh Sahib">Fatehgarh Sahib</option>
<option value="Fatehpur">Fatehpur</option>
<option value="Fazilka">Fazilka</option>
<option value="Firozabad">Firozabad</option>
<option value="Firozpur">Firozpur</option>
<option value="Gadag">Gadag</option>
<option value="Gadchiroli">Gadchiroli</option>
<option value="Gajapati">Gajapati</option>
<option value="Ganderbal">Ganderbal</option>
<option value="Gandhinagar">Gandhinagar</option>
<option value="Ganganagar">Ganganagar</option>
<option value="Ganjam">Ganjam</option>
<option value="Garhwa">Garhwa</option>
<option value="Gautam Buddh Nagar">Gautam Buddh Nagar</option>
<option value="Gaya">Gaya</option>
<option value="Ghaziabad">Ghaziabad</option>
<option value="Ghazipur">Ghazipur</option>
<option value="Giridih">Giridih</option>
<option value="Goalpara">Goalpara</option>
<option value="Godda">Godda</option>
<option value="Golaghat">Golaghat</option>
<option value="Gonda">Gonda</option>
<option value="Gondia">Gondia</option>
<option value="Gopalganj">Gopalganj</option>
<option value="Gorakhpur">Gorakhpur</option>
<option value="Gulbarga">Gulbarga</option>
<option value="Gumla">Gumla</option>
<option value="Guna">Guna</option>
<option value="Guntur">Guntur</option>
<option value="Gurdaspur">Gurdaspur</option>
<option value="Gurgaon">Gurgaon</option>
<option value="Gwalior">Gwalior</option>
<option value="Hailakandi">Hailakandi</option>
<option value="Hamirpur">Hamirpur</option>
<option value="Hamirpur">Hamirpur</option>
<option value="Hanumangarh">Hanumangarh</option>
<option value="Harda">Harda</option>
<option value="Hardoi">Hardoi</option>
<option value="Haridwar">Haridwar</option>
<option value="Hassan">Hassan</option>
<option value="Haveri district">Haveri district</option>
<option value="Hazaribag">Hazaribag</option>
<option value="Hingoli">Hingoli</option>
<option value="Hissar">Hissar</option>
<option value="Hooghly">Hooghly</option>
<option value="Hoshangabad">Hoshangabad</option>
<option value="Hoshiarpur">Hoshiarpur</option>
<option value="Howrah">Howrah</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Idukki">Idukki</option>
<option value="Imphal East">Imphal East</option>
<option value="Imphal West">Imphal West</option>
<option value="Indore">Indore</option>
<option value="Jabalpur">Jabalpur</option>
<option value="Jagatsinghpur">Jagatsinghpur</option>
<option value="Jaintia Hills">Jaintia Hills</option>
<option value="Jaipur">Jaipur</option>
<option value="Jaisalmer">Jaisalmer</option>
<option value="Jajpur">Jajpur</option>
<option value="Jalandhar">Jalandhar</option>
<option value="Jalaun">Jalaun</option>
<option value="Jalgaon">Jalgaon</option>
<option value="Jalna">Jalna</option>
<option value="Jalore">Jalore</option>
<option value="Jalpaiguri">Jalpaiguri</option>
<option value="Jammu">Jammu</option>
<option value="Jamnagar">Jamnagar</option>
<option value="Jamtara">Jamtara</option>
<option value="Jamui">Jamui</option>
<option value="Janjgir-Champa">Janjgir-Champa</option>
<option value="Jashpur">Jashpur</option>
<option value="Jaunpur district">Jaunpur district</option>
<option value="Jehanabad">Jehanabad</option>
<option value="Jhabua">Jhabua</option>
<option value="Jhajjar">Jhajjar</option>
<option value="Jhalawar">Jhalawar</option>
<option value="Jhansi">Jhansi</option>
<option value="Jharsuguda">Jharsuguda</option>
<option value="Jhunjhunu">Jhunjhunu</option>
<option value="Jind">Jind</option>
<option value="Jodhpur">Jodhpur</option>
<option value="Jorhat">Jorhat</option>
<option value="Junagadh">Junagadh</option>
<option value="Jyotiba Phule Nagar">Jyotiba Phule Nagar</option>
<option value="Kabirdham (formerly Kawardha)">Kabirdham (formerly Kawardha)</option>
<option value="Kadapa">Kadapa</option>
<option value="Kaimur">Kaimur</option>
<option value="Kaithal">Kaithal</option>
<option value="Kakinada">Kakinada</option>
<option value="Kalahandi">Kalahandi</option>
<option value="Kamrup">Kamrup</option>
<option value="Kamrup Metropolitan">Kamrup Metropolitan</option>
<option value="Kanchipuram">Kanchipuram</option>
<option value="Kandhamal">Kandhamal</option>
<option value="Kangra">Kangra</option>
<option value="Kanker">Kanker</option>
<option value="Kannauj">Kannauj</option>
<option value="Kannur">Kannur</option>
<option value="Kanpur">Kanpur</option>
<option value="Kanshi Ram Nagar">Kanshi Ram Nagar</option>
<option value="Kanyakumari">Kanyakumari</option>
<option value="Kapurthala">Kapurthala</option>
<option value="Karaikal">Karaikal</option>
<option value="Karauli">Karauli</option>
<option value="Karbi Anglong">Karbi Anglong</option>
<option value="Kargil">Kargil</option>
<option value="Karimganj">Karimganj</option>
<option value="Karimnagar">Karimnagar</option>
<option value="Karnal">Karnal</option>
<option value="Karur">Karur</option>
<option value="Kasaragod">Kasaragod</option>
<option value="Kathua">Kathua</option>
<option value="Katihar">Katihar</option>
<option value="Katni">Katni</option>
<option value="Kaushambi">Kaushambi</option>
<option value="Kendrapara">Kendrapara</option>
<option value="Kendujhar (Keonjhar)">Kendujhar (Keonjhar)</option>
<option value="Khagaria">Khagaria</option>
<option value="Khammam">Khammam</option>
<option value="Khandwa (East Nimar)">Khandwa (East Nimar)</option>
<option value="Khargone (West Nimar)">Khargone (West Nimar)</option>
<option value="Kheda">Kheda</option>
<option value="Khordha">Khordha</option>
<option value="Khowai">Khowai</option>
<option value="Khunti">Khunti</option>
<option value="Kinnaur">Kinnaur</option>
<option value="Kishanganj">Kishanganj</option>
<option value="Kishtwar">Kishtwar</option>
<option value="Kodagu">Kodagu</option>
<option value="Koderma">Koderma</option>
<option value="Kohima">Kohima</option>
<option value="Kokrajhar">Kokrajhar</option>
<option value="Kolar">Kolar</option>
<option value="Kolasib">Kolasib</option>
<option value="Kolhapur">Kolhapur</option>
<option value="Kolkata">Kolkata</option>
<option value="Kollam">Kollam</option>
<option value="Koppal">Koppal</option>
<option value="Koraput">Koraput</option>
<option value="Korba">Korba</option>
<option value="Koriya">Koriya</option>
<option value="Kota">Kota</option>
<option value="Kottayam">Kottayam</option>
<option value="Kozhikode">Kozhikode</option>
<option value="Krishna">Krishna</option>
<option value="Kulgam">Kulgam</option>
<option value="Kullu">Kullu</option>
<option value="Kupwara">Kupwara</option>
<option value="Kurnool">Kurnool</option>
<option value="Kurukshetra">Kurukshetra</option>
<option value="Kurung Kumey">Kurung Kumey</option>
<option value="Kushinagar">Kushinagar</option>
<option value="Kutch">Kutch</option>
<option value="Lahaul and Spiti">Lahaul and Spiti</option>
<option value="Lakhimpur">Lakhimpur</option>
<option value="Lakhimpur Kheri">Lakhimpur Kheri</option>
<option value="Lakhisarai">Lakhisarai</option>
<option value="Lalitpur">Lalitpur</option>
<option value="Latehar">Latehar</option>
<option value="Latur">Latur</option>
<option value="Lawngtlai">Lawngtlai</option>
<option value="Leh">Leh</option>
<option value="Lohardaga">Lohardaga</option>
<option value="Lohit">Lohit</option>
<option value="Lower Dibang Valley">Lower Dibang Valley</option>
<option value="Lower Subansiri">Lower Subansiri</option>
<option value="Lucknow">Lucknow</option>
<option value="Ludhiana">Ludhiana</option>
<option value="Lunglei">Lunglei</option>
<option value="Madhepura">Madhepura</option>
<option value="Madhubani">Madhubani</option>
<option value="Madurai">Madurai</option>
<option value="Mahamaya Nagar">Mahamaya Nagar</option>
<option value="Maharajganj">Maharajganj</option>
<option value="Mahasamund">Mahasamund</option>
<option value="Mahbubnagar">Mahbubnagar</option>
<option value="Mahe">Mahe</option>
<option value="Mahendragarh">Mahendragarh</option>
<option value="Mahoba">Mahoba</option>
<option value="Mainpuri">Mainpuri</option>
<option value="Malappuram">Malappuram</option>
<option value="Maldah">Maldah</option>
<option value="Malkangiri">Malkangiri</option>
<option value="Mamit">Mamit</option>
<option value="Mandi">Mandi</option>
<option value="Mandla">Mandla</option>
<option value="Mandsaur">Mandsaur</option>
<option value="Mandya">Mandya</option>
<option value="Mansa">Mansa</option>
<option value="Marigaon">Marigaon</option>
<option value="Mathura">Mathura</option>
<option value="Mau">Mau</option>
<option value="Mayurbhanj">Mayurbhanj</option>
<option value="Medak">Medak</option>
<option value="Meerut">Meerut</option>
<option value="Mehsana">Mehsana</option>
<option value="Mewat">Mewat</option>
<option value="Mirzapur">Mirzapur</option>
<option value="Moga">Moga</option>
<option value="Mokokchung">Mokokchung</option>
<option value="Mon">Mon</option>
<option value="Moradabad">Moradabad</option>
<option value="Morena">Morena</option>
<option value="Mumbai City">Mumbai City</option>
<option value="Mumbai suburban">Mumbai suburban</option>
<option value="Munger">Munger</option>
<option value="Murshidabad">Murshidabad</option>
<option value="Muzaffarnagar">Muzaffarnagar</option>
<option value="Muzaffarpur">Muzaffarpur</option>
<option value="Mysore">Mysore</option>
<option value="Nabarangpur">Nabarangpur</option>
<option value="Nadia">Nadia</option>
<option value="Nagaon">Nagaon</option>
<option value="Nagapattinam">Nagapattinam</option>
<option value="Nagaur">Nagaur</option>
<option value="Nagpur">Nagpur</option>
<option value="Nainital">Nainital</option>
<option value="Nalanda">Nalanda</option>
<option value="Nalbari">Nalbari</option>
<option value="Nalgonda">Nalgonda</option>
<option value="Namakkal">Namakkal</option>
<option value="Nanded">Nanded</option>
<option value="Nandurbar">Nandurbar</option>
<option value="Narayanpur">Narayanpur</option>
<option value="Narmada">Narmada</option>
<option value="Narsinghpur">Narsinghpur</option>
<option value="Nashik">Nashik</option>
<option value="Navsari">Navsari</option>
<option value="Nawada">Nawada</option>
<option value="Nawanshahr">Nawanshahr</option>
<option value="Nayagarh">Nayagarh</option>
<option value="Neemuch">Neemuch</option>
<option value="Nellore">Nellore</option>
<option value="New Delhi">New Delhi</option>
<option value="Nilgiris">Nilgiris</option>
<option value="Nizamabad">Nizamabad</option>
<option value="North 24 Parganas">North 24 Parganas</option>
<option value="North Delhi">North Delhi</option>
<option value="North East Delhi">North East Delhi</option>
<option value="North Goa">North Goa</option>
<option value="North Sikkim">North Sikkim</option>
<option value="North Tripura">North Tripura</option>
<option value="North West Delhi">North West Delhi</option>
<option value="Nuapada">Nuapada</option>
<option value="Ongole">Ongole</option>
<option value="Osmanabad">Osmanabad</option>
<option value="Pakur">Pakur</option>
<option value="Palakkad">Palakkad</option>
<option value="Palamu">Palamu</option>
<option value="Pali">Pali</option>
<option value="Palwal">Palwal</option>
<option value="Panchkula">Panchkula</option>
<option value="Panchmahal">Panchmahal</option>
<option value="Panchsheel Nagar district (Hapur)">Panchsheel Nagar district (Hapur)</option>
<option value="Panipat">Panipat</option>
<option value="Panna">Panna</option>
<option value="Papum Pare">Papum Pare</option>
<option value="Parbhani">Parbhani</option>
<option value="Paschim Medinipur">Paschim Medinipur</option>
<option value="Patan">Patan</option>
<option value="Pathanamthitta">Pathanamthitta</option>
<option value="Pathankot">Pathankot</option>
<option value="Patiala">Patiala</option>
<option value="Patna">Patna</option>
<option value="Pauri Garhwal">Pauri Garhwal</option>
<option value="Perambalur">Perambalur</option>
<option value="Phek">Phek</option>
<option value="Pilibhit">Pilibhit</option>
<option value="Pithoragarh">Pithoragarh</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Poonch">Poonch</option>
<option value="Porbandar">Porbandar</option>
<option value="Pratapgarh">Pratapgarh</option>
<option value="Pratapgarh">Pratapgarh</option>
<option value="Pudukkottai">Pudukkottai</option>
<option value="Pulwama">Pulwama</option>
<option value="Pune">Pune</option>
<option value="Purba Medinipur">Purba Medinipur</option>
<option value="Puri">Puri</option>
<option value="Purnia">Purnia</option>
<option value="Purulia">Purulia</option>
<option value="Raebareli">Raebareli</option>
<option value="Raichur">Raichur</option>
<option value="Raigad">Raigad</option>
<option value="Raigarh">Raigarh</option>
<option value="Raipur">Raipur</option>
<option value="Raisen">Raisen</option>
<option value="Rajauri">Rajauri</option>
<option value="Rajgarh">Rajgarh</option>
<option value="Rajkot">Rajkot</option>
<option value="Rajnandgaon">Rajnandgaon</option>
<option value="Rajsamand">Rajsamand</option>
<option value="Ramabai Nagar (Kanpur Dehat)">Ramabai Nagar (Kanpur Dehat)</option>
<option value="Ramanagara">Ramanagara</option>
<option value="Ramanathapuram">Ramanathapuram</option>
<option value="Ramban">Ramban</option>
<option value="Ramgarh">Ramgarh</option>
<option value="Rampur">Rampur</option>
<option value="Ranchi">Ranchi</option>
<option value="Ratlam">Ratlam</option>
<option value="Ratnagiri">Ratnagiri</option>
<option value="Rayagada">Rayagada</option>
<option value="Reasi">Reasi</option>
<option value="Rewa">Rewa</option>
<option value="Rewari">Rewari</option>
<option value="Ri Bhoi">Ri Bhoi</option>
<option value="Rohtak">Rohtak</option>
<option value="Rohtas">Rohtas</option>
<option value="Rudraprayag">Rudraprayag</option>
<option value="Rupnagar">Rupnagar</option>
<option value="Sabarkantha">Sabarkantha</option>
<option value="Sagar">Sagar</option>
<option value="Saharanpur">Saharanpur</option>
<option value="Saharsa">Saharsa</option>
<option value="Sahibganj">Sahibganj</option>
<option value="Saiha">Saiha</option>
<option value="Salem">Salem</option>
<option value="Samastipur">Samastipur</option>
<option value="Samba">Samba</option>
<option value="Sambalpur">Sambalpur</option>
<option value="Sangli">Sangli</option>
<option value="Sangrur">Sangrur</option>
<option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
<option value="Sant Ravidas Nagar">Sant Ravidas Nagar</option>
<option value="Saran">Saran</option>
<option value="Satara">Satara</option>
<option value="Satna">Satna</option>
<option value="Sawai Madhopur">Sawai Madhopur</option>
<option value="Sehore">Sehore</option>
<option value="Senapati">Senapati</option>
<option value="Seoni">Seoni</option>
<option value="Seraikela Kharsawan">Seraikela Kharsawan</option>
<option value="Serchhip">Serchhip</option>
<option value="Shahdol">Shahdol</option>
<option value="Shahjahanpur">Shahjahanpur</option>
<option value="Shajapur">Shajapur</option>
<option value="Shamli">Shamli</option>
<option value="Sheikhpura">Sheikhpura</option>
<option value="Sheohar">Sheohar</option>
<option value="Sheopur">Sheopur</option>
<option value="Shimla">Shimla</option>
<option value="Shimoga">Shimoga</option>
<option value="Shivpuri">Shivpuri</option>
<option value="Shopian">Shopian</option>
<option value="Shravasti">Shravasti</option>
<option value="Sibsagar">Sibsagar</option>
<option value="Siddharthnagar">Siddharthnagar</option>
<option value="Sidhi">Sidhi</option>
<option value="Sikar">Sikar</option>
<option value="Simdega">Simdega</option>
<option value="Sindhudurg">Sindhudurg</option>
<option value="Singrauli">Singrauli</option>
<option value="Sirmaur">Sirmaur</option>
<option value="Sirohi">Sirohi</option>
<option value="Sirsa">Sirsa</option>
<option value="Sitamarhi">Sitamarhi</option>
<option value="Sitapur">Sitapur</option>
<option value="Sivaganga">Sivaganga</option>
<option value="Siwan">Siwan</option>
<option value="Solan">Solan</option>
<option value="Solapur">Solapur</option>
<option value="Sonbhadra">Sonbhadra</option>
<option value="Sonipat">Sonipat</option>
<option value="Sonitpur">Sonitpur</option>
<option value="South 24 Parganas">South 24 Parganas</option>
<option value="South Delhi">South Delhi</option>
<option value="South Garo Hills">South Garo Hills</option>
<option value="South Goa">South Goa</option>
<option value="South Sikkim">South Sikkim</option>
<option value="South Tripura">South Tripura</option>
<option value="South West Delhi">South West Delhi</option>
<option value="Sri Muktsar Sahib">Sri Muktsar Sahib</option>
<option value="Srikakulam">Srikakulam</option>
<option value="Srinagar">Srinagar</option>
<option value="Subarnapur (Sonepur)">Subarnapur (Sonepur)</option>
<option value="Sultanpur">Sultanpur</option>
<option value="Sundergarh">Sundergarh</option>
<option value="Supaul">Supaul</option>
<option value="Surat">Surat</option>
<option value="Surendranagar">Surendranagar</option>
<option value="Surguja">Surguja</option>
<option value="Tamenglong">Tamenglong</option>
<option value="Tarn Taran">Tarn Taran</option>
<option value="Tawang">Tawang</option>
<option value="Tehri Garhwal">Tehri Garhwal</option>
<option value="Thane">Thane</option>
<option value="Thanjavur">Thanjavur</option>
<option value="The Dangs">The Dangs</option>
<option value="Theni">Theni</option>
<option value="Thiruvananthapuram">Thiruvananthapuram</option>
<option value="Thoothukudi">Thoothukudi</option>
<option value="Thoubal">Thoubal</option>
<option value="Thrissur">Thrissur</option>
<option value="Tikamgarh">Tikamgarh</option>
<option value="Tinsukia">Tinsukia</option>
<option value="Tirap">Tirap</option>
<option value="Tiruchirappalli">Tiruchirappalli</option>
<option value="Tirunelveli">Tirunelveli</option>
<option value="Tirupur">Tirupur</option>
<option value="Tiruvallur">Tiruvallur</option>
<option value="Tiruvannamalai">Tiruvannamalai</option>
<option value="Tiruvarur">Tiruvarur</option>
<option value="Tonk">Tonk</option>
<option value="Tuensang">Tuensang</option>
<option value="Tumkur">Tumkur</option>
<option value="Udaipur">Udaipur</option>
<option value="Udalguri">Udalguri</option>
<option value="Udham Singh Nagar">Udham Singh Nagar</option>
<option value="Udhampur">Udhampur</option>
<option value="Udupi">Udupi</option>
<option value="Ujjain">Ujjain</option>
<option value="Ukhrul">Ukhrul</option>
<option value="Umaria">Umaria</option>
<option value="Una">Una</option>
<option value="Unnao">Unnao</option>
<option value="Upper Siang">Upper Siang</option>
<option value="Upper Subansiri">Upper Subansiri</option>
<option value="Uttar Dinajpur">Uttar Dinajpur</option>
<option value="Uttara Kannada">Uttara Kannada</option>
<option value="Uttarkashi">Uttarkashi</option>
<option value="Vadodara">Vadodara</option>
<option value="Vaishali">Vaishali</option>
<option value="Valsad">Valsad</option>
<option value="Varanasi">Varanasi</option>
<option value="Vellore">Vellore</option>
<option value="Vidisha">Vidisha</option>
<option value="Viluppuram">Viluppuram</option>
<option value="Virudhunagar">Virudhunagar</option>
<option value="Visakhapatnam">Visakhapatnam</option>
<option value="Vizianagaram">Vizianagaram</option>
<option value="Vyara">Vyara</option>
<option value="Warangal">Warangal</option>
<option value="Wardha">Wardha</option>
<option value="Washim">Washim</option>
<option value="Wayanad">Wayanad</option>
<option value="West Champaran">West Champaran</option>
<option value="West Delhi">West Delhi</option>
<option value="West Garo Hills">West Garo Hills</option>
<option value="West Kameng">West Kameng</option>
<option value="West Khasi Hills">West Khasi Hills</option>
<option value="West Siang">West Siang</option>
<option value="West Sikkim">West Sikkim</option>
<option value="West Singhbhum">West Singhbhum</option>
<option value="West Tripura">West Tripura</option>
<option value="Wokha">Wokha</option>
<option value="Yadgir">Yadgir</option>
<option value="Yamuna Nagar">Yamuna Nagar</option>
<option value="Yanam">Yanam</option>
<option value="Yavatmal">Yavatmal</option>
<option value="Zunheboto">Zunheboto</option>

</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" required placeholder="Enter State">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required name="totalfl">
															<option value="">Select Floor</option>
															<option value="1 Floor">1 Floor</option>
															<option value="2 Floor">2 Floor</option>
															<option value="3 Floor">3 Floor</option>
															<option value="4 Floor">4 Floor</option>
															<option value="5 Floor">5 Floor</option>
															<option value="6 Floor">6 Floor</option>
															<option value="7 Floor">7 Floor</option>
															<option value="8 Floor">8 Floor</option>
															<option value="9 Floor">9 Floor</option>
															<option value="10 Floor">10 Floor</option>
															<option value="11 Floor">11 Floor</option>
															<option value="12 Floor">12 Floor</option>
															<option value="13 Floor">13 Floor</option>
															<option value="14 Floor">14 Floor</option>
															<option value="15 Floor">15 Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="asize" required placeholder="Enter Area Size (in sqrt)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc" required placeholder="Enter Address">
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-lg-2 col-form-label">Feature</label>
											<div class="col-lg-9">
											<p class="alert alert-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details</p>
											
											<textarea class="tinymce form-control" name="feature" rows="10" cols="30">
												<!---feature area start--->
												<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Property Age : </span>10 Years</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Swiming Pool : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Parking : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">GYM : </span>Yes</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Type : </span>Apartment</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Security : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Dining Capacity : </span>10 People</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Church/Temple  : </span>No</li>
														
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">3rd Party : </span>No</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Elevator : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">CCTV : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Water Supply : </span>Ground Water / Tank</li>
														</ul>
													</div>
												<!---feature area end---->
											</textarea>
											</div>
										</div>
												
										<h5 class="text-secondary">Image & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Select Status</option>
															<option value="available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Basement Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage1" type="file">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" required="">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage" type="file">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Ground Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage2" type="file">
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control" required name="isFeatured">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submit Property" class="btn btn-info"name="add" style="margin-left:200px;">
										
								</div>
								</form>
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->
        
        
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>