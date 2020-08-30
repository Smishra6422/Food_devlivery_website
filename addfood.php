<?php 

session_start();

if(!isset($_SESSION['userId']) || !isset($_SESSION['role'])) {
	header('location: login.php');
}

?>

<?php
// define variables and set to empty values

// DB FILE
include 'dbConnection.php';

// TODO: Use different variable for user and Restaurant

$image = $name = $foodCategory = $price = $originalPrice = $ingredients = "";

$fileError = "";


// if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(isset($_POST['food-submit'])) {
		$image = $_FILES["image"];
		 $name = testInputData($_POST["name"]);
  		 $foodCategory = testInputData($_POST["foodCategory"]);
  		 $price = testInputData($_POST["price"]);
  		 $originalPrice = testInputData($_POST["original-price"]);
  		 $ingredients = testInputData($_POST["ingredients"]);

  		 // print_r($ingredients);

  		 $fileName = $image['name'];
  		 $temName = $image['tmp_name'];

  		 if($image['type'] != 'image/jpeg' && $image['type'] != 'image/jpg' && $image['type'] != 'image/png') {
  		 	$fileError = "Please select image file only";
  		 } elseif ($image['size']>2097152) {
  		 	$fileError = "Please select image less then 2MB only";
  		 } else {
  		 	$imageResult = move_uploaded_file($temName, 'assets/'.$fileName);
  		 	

  		 	$filePath = 'assets/'.$fileName;
  		 	$adminId = $_SESSION['userId'];

  		 	$insertQuery = "INSERT INTO food(image, foodName, foodCategory, price, originalPrice, Ingredients, userId) VALUES ('$filePath','$name','$foodCategory','$price','$originalPrice','$ingredients','$adminId')";
  		 	$queryResult = mysqli_query($con,$insertQuery);

  		 	if($queryResult) {
  		 		header('Location: admin.php');
  		 	}
  		 }

  		 

  		 
  		 	
  		
 




 
  
}

function testInputData($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>




<?php 

include "templates/head.php";

?>


<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/add-food.css">



</head>
<body>


<?php

include "templates/navbar.php";

include "templates/addFood.php";

include "templates/footer.php";

include "templates/bottom.php";

?>