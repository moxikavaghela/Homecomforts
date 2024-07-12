<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$id = $_GET['pid'];
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    
    <title>Lawyer Details</title>

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
                    <p class="text-white link-nav"><a href="index.php">Home </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="particularpg-details.php">
                            Lawyer Details
                        </a>
                        
                        </p>
                    <h1 class="text-white">
                       Lawyer Details
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!--  Blog Area -->
    <section class="blog_area single-post-area p_120">
        <div class="container">
            <div class="row mt-80">
                 <?php
 $cid=$_GET['pid'];
$ret=mysqli_query($con,"select * from lawyer where id='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <div class="col-lg-12 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img" align="center">
<img src="img/lawyer/<?php echo $row['Image'];?>" height='350' width="1000" style="border:#000 solid 2px;">
</div>
<h2 align="center" style="margin-top:2%"><?php echo $row['name'];?>'s Details</h2>      
                        </div>
                        
                        
                        <div class="col-lg-6 col-md-9 blog_details">
                
  <table border="1" class="table table-bordered mg-b-0">
                    
               <tr>
    <th>City</th>
    <td><?php  echo $row['address'];?></td>
  </tr>   
   <tr>
    <th>Degree</th>
    <td><?php  echo $row['degree'];?></td>
  </tr>
 <tr>
    <th>Mobile No</th>
    <td><?php  echo $row['mobile'];?></td>
  </tr>
 </table>





</div>
     <div class="col-lg-6 col-md-9 blog_details">
  
 
                
                  
    </div>
   </div>
<?php if($_SESSION['pgasuid']==""){?>
<a href="signin.php" class="btn primary-btn">Book Now</a>
<?php } else {?>
<form method="post">
    


        </div>

                        </form> 
                 
                 <?php } ?>   
            
      </div>
    </div>
    </section>
    <!--  Blog Area -->
<!-- Button to Open the Modal -->

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
   <form class="row contact_form" action="" method="post" id="">
            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?></p>
            <div class="col-md-12">


<div class="form-group">
              <p style="font-size: 18px;color: black">Check In Date: <input type="date" class="form-control" id="chkin" name="chkin" required="true"></p>
              </div>

        

              <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" required="true"></textarea>
              </div>
            </div>
            
            <div class="col-md-12 text-center">
              <button type="submit" value="submit" class="btn primary-btn" name="submit">Submit</button>
            </div>
          </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
    <!-- start footer Area -->
    <div style="margin-top:1%">
   <?php include_once('includes/footer.php');?>
   </div>
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
<?php } ?>