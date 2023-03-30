<?php
include("config.php");
$id = $_GET['id'];

// view code//
$sql = "SELECT * FROM auction where id='$id'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result))
	

//end view code
$msg="";
$sql = "DELETE FROM auction WHERE id = {$id}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Auction Deleted</p>";
	header("Location:auctionlist.php?msg=$msg");
}
else
{
	$msg="<p class='alert alert-warning'>Auction not Deleted</p>";
		header("Location:auctionlist.php?msg=$msg");
}

mysqli_close($con);
?>
