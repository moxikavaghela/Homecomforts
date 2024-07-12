<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['name'];
    $mobno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];

    $query=mysqli_query($con, "insert into feedback(FullName, MobileNumber, Email,  feedback) value('$fname', '$mobno', '$email', '$feedback' )");
    if ($query) {
		
    $msg="You have successfully created feedback";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	
	<title>Contact Us</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">=
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<?php include_once('includes/header.php');?>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex text-center align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="contact.php">
							Contact Us</a></p>
					<h1 class="text-white">
						Contact Us
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
	<section class="about-area section-gap bg-white">
<form class="row contact_form" action="" method="post" id="" name="signup" onsubmit="return checkpass();">
						<div class="col-md-12">

						

							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required="true">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required="true">
							</div>
							<div class="form-group">
								<input type="number" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Enter Mobile Number" maxlength="10" pattern="[0-9]{10}" required="true">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="feedback" name="feedback" placeholder="feedback" required="true">
							</div>
						</div>
						
						<div class="col-md-6 text-left">
							<button type="submit" value="submit" name="submit" class="btn primary-btn">Feedback</button>
						</div>
					</form>
					</section>
	<!-- Start About Area -->
	<section class="about-area section-gap bg-white">
		<div class="container">
			<div class="row d-flex justify-content-end align-items-center">
				<div class="col-lg-6">
					<?php

                    
$ret=mysqli_query($con,"select * from tblpages where PageType='contactus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
					<div class="single-about">
						<h4><?php  echo $row['PageTitle'];?></h4>
						<p>
							<?php  echo $row['PageDescription'];?>
						</p>
					</div>
					
					
				</div>
				<?php } ?>
				<div class="col-lg-6 about-right no-padding">
					<img class="img-fluid" src="img/about-img.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	
	<!-- End About Area -->

	<!-- Start testomial Area -->
	
	<!-- End testomial Area -->

	<!-- start footer Area -->
	<?php include_once('includes/footer.php');?>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/ion.rangeSlider.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>