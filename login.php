<!-- Session Start -->
<?php 

session_start();

?>



<?php


// DB FILE
include 'dbConnection.php';

$email = $password =  "";

$error = "";
// $numberError = "";

$restaurantDisplay = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(isset($_POST['user-login-button'])) {
  		 $email = testInputData($_POST["email"]);
  		 $password = testInputData($_POST["password"]);

  		 $email = strtolower($email);

  		 // CHECK EMAIL IF ALREADY EXISTS
  		 $emailCheckQuery = " select * from user where email='$email' ";
  		 $query = mysqli_query($con,$emailCheckQuery);

  		 // echo $emailCheckQuery;

  		 $emailCount = mysqli_num_rows($query);

  		 if($emailCount==0) {
  		 	$error =  "Email does not exists";
  		 	// echo $emailError;
  		 } elseif ($emailCount>0) {
  		 	$userDbData = mysqli_fetch_assoc($query);
  		 	$userDbPass = $userDbData['password'];

  		 	$decodePass = password_verify($password, $userDbPass);

  		 	if(!$decodePass) {
  		 		$error = "Email or password do not match!";
  		 	}
  		 	else {
  		 		header('Location: index.php');
  		 	}

  		 }

  		 
  		 
 

	} 
	if(isset($_POST['restaurant-login-button'])) {
  		 $email = testInputData($_POST["email"]);
  		 $password = testInputData($_POST["password"]);

  		 $email = strtolower($email);


  		 // CHECK EMAIL IF ALREADY EXISTS
  		 $emailCheckQuery = " select * from restaurant_user where email='$email' ";
  		 // $query = mysqli_query($con,$emailCheckQuery);
       $query = mysqli_query($con,$emailCheckQuery);

  		 $emailCount = mysqli_num_rows($query);

  		 if($emailCount==0) {
  		 	$error =  "Email does not exists";
        $restaurantDisplay = "showRest";
  		 	// echo $emailError;
  		 } elseif ($emailCount>0) {
  		 	$userDbData = mysqli_fetch_assoc($query);
  		 	$userDbPass = $userDbData['password'];

  		 	$decodePass = password_verify($password, $userDbPass);

  		 	if(!$decodePass) {
  		 		$error = "Email or password do not match!";
          $restaurantDisplay = "showRest";
  		 	}
  		 	else {
          $userDbData = mysqli_fetch_array($query);
          $_SESSION['userId'] = "ascs";
          $_SESSION['roll'] = $userDbData['role'];

          // echo $_SESSION['userId'];

          
  		 		// header('Location: index.php');
  		 	
  		 }

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








<!-- Main Data -->


<?php 

include "templates/head.php";

?>


<link rel="stylesheet" href="css/glide.core.min.css">
<link rel="stylesheet" href="css/glide.theme.min.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/login.css">
<!-- <link rel="stylesheet" href="css/food-slider.css"> -->
<!-- <link rel="stylesheet" href="css/home-page-food.css"> -->



</head>
<body>


<?php

include "templates/navbar.php";

include "templates/login.php";

// include "templates/foodslider.php";

// include "templates/homePageFood.php";

include "templates/bottom.php";

?>