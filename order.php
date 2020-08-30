<!-- Session Start -->
<?php 

session_start();

if (isset($_SESSION['userId']) && !isset($_SESSION['role'])) {
	echo '
			<script>
				alert("Your order succesfully placed!");
				location.replace("index.php");
			</script>
		
	';
  
} else {
header('location: login.php');
}

?>



