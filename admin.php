<?php 

session_start();

if(!isset($_SESSION['userId']) || !isset($_SESSION['role'])) {
	header('location: login.php');
}

?>

<?php


// DB FILE
include 'dbConnection.php';
		
		$currentAdminId = $_SESSION['userId'];
		$foodCount = 0;
		$foodDataQuery = " select * from food where userId='$currentAdminId'";
  		 $query = mysqli_query($con,$foodDataQuery);

  		 $foodCount = mysqli_num_rows($query);

  		 $foods = mysqli_fetch_all($query,MYSQLI_ASSOC);

  		 

?>




<?php 

include "templates/head.php";

?>


<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/admin.css">



</head>
<body>


<?php

include "templates/navbar.php";

include "templates/admin.php";

include "templates/footer.php";

include "templates/bottom.php";

?>