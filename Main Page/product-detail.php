	<?php
		include("headfile.html");
		include("db.php");


		$SQL2="select * from event";
		$exeSQL2=mysqli_query($conn, $SQL2) or die (mysqli_error($conn));
	
		echo "<div  class='row'>";
		while($arrayevents = mysqli_fetch_array($exeSQL2)){
			echo "<div class='col-md-4 product-grid'>";
			echo "<div class='image'>";
				echo "<img src='images/" .$arrayevents['eventImage'] ."'class='w-100' width='300px' height='300px'>";
				echo "<div class='overlay'>";
			echo"</div>";
			echo"</div>";
			echo"<h5 class='text-center'>".$arrayevents['eventName']."</h5>";
			echo "<p class='text-center'>Location: ".$arrayevents['eventLocaltion']."</p>";
			echo "<p class='text-center'>".$arrayevents['eventDetails']."</p>";
			
		echo"</div>";
		}
	?>
<?php
	include("footfile.html");
?>