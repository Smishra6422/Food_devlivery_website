<?php 

session_start();

?>

<?php


// DB FILE
include 'dbConnection.php';

		$foodDataQuery = " select * from food";
  		 $query = mysqli_query($con,$foodDataQuery);

  		 // $foodCount = mysqli_num_rows($query);

  		 $foods = mysqli_fetch_all($query,MYSQLI_ASSOC);

  		 

?>



<?php 

include "templates/head.php";

?>


<link rel="stylesheet" href="css/glide.core.min.css">
<link rel="stylesheet" href="css/glide.theme.min.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/main-head-data.css">
<link rel="stylesheet" href="css/food-slider.css">
<link rel="stylesheet" href="css/home-page-food.css">



</head>
<body>


<?php

include "templates/navbar.php";

include "templates/mainHead.php";

include "templates/foodslider.php";

include "templates/homePageFood.php";

include "templates/footer.php";

include "templates/bottom.php";

?>