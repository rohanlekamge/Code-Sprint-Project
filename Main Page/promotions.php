<?php
include("headfile.html");
$con = mysqli_connect("localhost","root","","codesprint");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
    

  $promoSQL = "select * from promotion";
  $exepromoSQL = mysqli_query($con,$promoSQL);
  while($result = mysqli_fetch_array($exepromoSQL)){
      echo"	<div class='col-md-3 product-grid'  style='float:left;'>
				<div class='image'>
						<img src='images/".$result['imgname']."' class='w-100'>
						<div class='overlay'>
							<div class='detail'>View Details</div>
						</div>
					</a>
				</div>
				<h5 class='text-center'>".$result['promoname']."</h5>
				<h5 class='text-center'>Rs ".$result['price']."</h5>
				<h5 class='text-center'>".$result['discount']."</h5>
				<h5 class='text-center'>Valid till".$result['discount']."</h5>
				<a href='#' class='btn buy'>Add to wishlist</a>
			</div>";
  } ;
}
?>