<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "food_app";

$con = mysqli_connect($server,$user,$password,$db);

if($con) {
	?>




	<?php
} else {
	?>

	<script type="text/javascript">
		alert("DB Connection failed")
	</script>


	<?php
}

?>