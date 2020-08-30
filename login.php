<!-- Session Start -->
<?php 

session_start();

if (isset($_SESSION['userId'])) {
  header('location: index.php');
}

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
          $sql = "SELECT * from user where email='$email'";
          $result = mysqli_query($con,$sql);
          $userDbData = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $_SESSION['userId'] = $userDbData['id'];
          
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
          $sql = "SELECT * from restaurant_user where email='$email'";
          $result = mysqli_query($con,$sql);
          $userDbData = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $_SESSION['userId'] = $userDbData['id'];
          $_SESSION['role'] = 1;
          $_SESSION['name'] = $userDbData['name'];

          
  		 		header('Location: index.php');
  		 	
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


<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/login.css">



</head>
<body>


<?php

include "templates/navbar.php";

include "templates/login.php";

include "templates/footer.php";



include "templates/bottom.php";

?>