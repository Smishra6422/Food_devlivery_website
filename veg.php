<?php 

session_start();

?>

<?php


// DB FILE
include 'dbConnection.php';

		$foodDataQuery = " select * from food where foodCategory='veg'";
  		 $query = mysqli_query($con,$foodDataQuery);

  		 // $foodCount = mysqli_num_rows($query);

  		 $foods = mysqli_fetch_all($query,MYSQLI_ASSOC);

  		 // foreach ($foods as $food ) {
  		 // 	print_r($food['foodName']);
  		 // 	echo "<br />";
  		 // }

?>



<?php 

include "templates/head.php";

?>


<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/home-page-food.css">



</head>
<body>


<?php

include "templates/navbar.php";

include "templates/veg.php";

include "templates/footer.php";

include "templates/bottom.php";

?>