<!-- Session Start -->
<?php 

session_start();

if (isset($_SESSION['userId'])) {
  header('location: index.php');
}

?>


<?php
// define variables and set to empty values

// DB FILE
include 'dbConnection.php';

// TODO: Use different variable for user and Restaurant

$name = $email = $foodChoice = $password = $number = "";

$emailError = "";
$numberError = "";

$restaurantDisplay = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(isset($_POST['user-submit'])) {
		 $name = testInputData($_POST["name"]);
  		 $email = testInputData($_POST["email"]);
  		 $foodChoice = testInputData($_POST["foodChoice"]);
  		 $password = testInputData($_POST["password"]);

       $email = strtolower($email);

  		 // HASH THE PASSOWRD
  		 $hashPassword = password_hash($password, PASSWORD_BCRYPT);

  		 // CHECK EMAIL IF ALREADY EXISTS
  		 $emailCheckQuery = " select * from user where email='$email' ";
  		 $query = mysqli_query($con,$emailCheckQuery);

  		 $emailCount = mysqli_num_rows($query);

  		 if($emailCount>0) {
  		 	$emailError =  "Email already exists";
  		 	// echo $emailError;
  		 } else {
  		 	// echo "string";
  		 	$insertQuery = "INSERT INTO user (name, email, foodChoice, password) values('$name','$email', '$foodChoice', '$hashPassword')";
  		 	$queryResult = mysqli_query($con,$insertQuery);
  		 	
  		 	if($queryResult) {
  		 		header('Location: login.php');
  		 	}
  		 }
 

	} if(isset($_POST['restaurant-submit'])) {
		 $name = testInputData($_POST["name"]);
  		 $email = testInputData($_POST["email"]);
  		 $number = testInputData($_POST["number"]);
  		 $password = testInputData($_POST["password"]);

  		 $email = strtolower($email);

  		 // HASH THE PASSOWRD
  		 $hashPassword = password_hash($password, PASSWORD_BCRYPT);

  		 // CHECK EMAIL IF ALREADY EXISTS
  		 $emailCheckQuery = " select * from restaurant_user where email='$email' ";
  		 $query = mysqli_query($con,$emailCheckQuery);

  		 $emailCount = mysqli_num_rows($query);

  		 // CHECK NUMBER IF ALREADY EXISTS
  		 $numberCheckQuery = " select * from restaurant_user where mobile='$number' ";
  		 $query2 = mysqli_query($con,$numberCheckQuery);

  		 $numberCount = mysqli_num_rows($query2);

  		 if($emailCount>0) {
  		 	$emailError =  "Email already exists";
        $restaurantDisplay = "showRest";
  		 	// echo $emailError;
  		 } elseif ($numberCount>0) {
  		 	$numberError =  "Number already exists";
        $restaurantDisplay = "showRest";
  		 }
  		 else {
  		 	// echo "string";
  		 	$insertQuery = "INSERT INTO restaurant_user (name, mobile, email, password,role) values('$name','$number', '$email', '$hashPassword',1)";
  		 	$queryResult = mysqli_query($con,$insertQuery);
  		 	
  		 	if($queryResult) {
  		 		header('Location: login.php');
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


<!-- Main Content -->



<?php 

include "templates/head.php";

?>


<link rel="stylesheet" href="css/glide.core.min.css">
<link rel="stylesheet" href="css/glide.theme.min.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/signup.css">



</head>
<body>


<?php

include "templates/navbar.php";

include "templates/signup.php";

include "templates/footer.php";


include "templates/bottom.php";

?>