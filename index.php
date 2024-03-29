<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
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
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--	Title
	=========================================================-->
<title>Housefinder</title>
</head>
<body>

<!--	Page Loader  -->
<!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
<!--	Page Loader  -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
		
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/banner/rshmpg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mb-4"><span class="text-success">Let us</span><br>
                            Guide you Home</h1>
                            <form method="post" action="propertygrid.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
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
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype">
                                                <option value="">Select Status</option>
												<option value="rent">Rent</option>
												<option value="sale">Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <!-- <input type="text" class="form-control" name="city" placeholder="Enter City" required> -->
                                            <select class="form-control" name="city" required placeholder="Enter City">
 
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
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-success w-100">Search Property</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner End  -->
        
        <!--	Text Block One
		======================================================-->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-rent text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Selling Service</a></h5>
                                <p>This is a dummy text for filling out spaces. Just some random words...</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-for-rent text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Rental Service</a></h5>
                                <p>This is a dummy text for filling out spaces. Just some random words...</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-list text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Property Listing</a></h5>
                                <p>This is a dummy text for filling out spaces. Just some random words...</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-diagram text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Legal Investment</a></h5>
                                <p>This is a dummy text for filling out spaces. Just some random words...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-----  Our Services  ---->
		
        <!--	Recent Properties  -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
                    </div>
                    <!--- <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> --->
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>
								
                                    <div class="col-md-6 col-lg-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                                <div class="featured bg-success text-white">New</div>
                                                <div class="sale bg-success text-white text-capitalize">For <?php echo $row['5'];?></div>
                                                <div class="price text-primary"><b>$<?php echo $row['13'];?> </b><span class="text-white"><?php echo $row['12'];?> Sqft</span></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-3">
                                                    <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                                    <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> <?php echo $row['14'];?></span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span><?php echo $row['12'];?></span> Sqft</li>
                                                        <li><span><?php echo $row['6'];?></span> Beds</li>
                                                        <li><span><?php echo $row['7'];?></span> Baths</li>
                                                        <li><span><?php echo $row['9'];?></span> Kitchen</li>
                                                        <li><span><?php echo $row['8'];?></span> Balcony</li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="p-4 d-inline-block w-100">
                                                    <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>By : <?php echo $row['uname'];?></div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> <?php echo date('d-m-Y', strtotime($row['date']));?></div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php } ?>

                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	Recent Properties  -->
        
        <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/01.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Top Rated</h5>
										<p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experienced Agents</h5>
										<p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	why choose us -->
		
		<!--	How it work -->
        <!-- <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-success text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-success text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-success text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <!--	How It Work -->
        
        <!--	Achievement
        ============================================================-->
        <div class="full-row overlay-secondary" style="background-image: url('images/breadcromb.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="fact-counter">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Property Available</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='sale'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Sale Property Available</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='rent'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Rent Property Available</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <?php
										$query=mysqli_query($con,"SELECT count(uid) FROM user");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Registered Users</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <!--	Popular Place -->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Popular Places</h2></div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/1.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Olisphis'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/2.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Awrerton'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/3.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Floson'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/4.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Ulmore'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Popular Places -->
		
		<!--	Testonomial -->
		<div class="full-row">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="content-sidebar p-4">
							<div class="mb-3 col-lg-12">
								<h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonial</h4>
									<div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-success">
									
										<?php
													
												$query=mysqli_query($con,"select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
												while($row=mysqli_fetch_array($query))
													{
										?>
										<div class="item">
											<div class="p-4 bg-success down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-success d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"><?php echo $row['utype']; ?></span>
											</div>
										</div>
										<?php }  ?>
										
									</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
		<!--	Testonomial -->
		
		
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
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
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>