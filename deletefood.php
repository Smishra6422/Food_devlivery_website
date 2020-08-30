<?php 

session_start();

if(!isset($_SESSION['userId']) || !isset($_SESSION['role'])) {
	header('location: login.php');
}else {
	if(isset($_GET['id'])) {
		$foodId =  $_GET['id'];
		include 'dbConnection.php';

		$findQuery = "SELECT * FROM food WHERE id='$foodId'";
		$deleteQuery = "DELETE FROM food WHERE id='$foodId'";


		$foodResult = mysqli_query($con,$findQuery);
		
		$foodResult = mysqli_fetch_all($foodResult,MYSQLI_ASSOC);

		

		if(!unlink($foodResult[0]['image'])) {
			echo 'Unable to delete file';
		} else {
			if(mysqli_query($con,$deleteQuery)) {
  		 	echo '<script>
				alert("Food succesfully deleted!");
				location.replace("admin.php");
			</script>';
  		 } else {
  		 	echo '<script>
  		 		alert("Food Not Deleted");
  		 		location.replace("admin.php");
  		 		</script>';
  		 }
		}
  		 



	} else {
		header('location: login.php');
	}
		
}



?>