<?php 

if(!$_SESSION['userId'] && $_SESSION['role']!= 1) {
	header('location: login.php');
}

?>




<?php 

include "templates/head.php";

?>


<link rel="stylesheet" href="css/glide.core.min.css">
<link rel="stylesheet" href="css/glide.theme.min.css">
<link rel="stylesheet" href="css/navbar.css">
<!-- <link rel="stylesheet" href="css/main-head-data.css"> -->
<!-- <link rel="stylesheet" href="css/food-slider.css"> -->
<!-- <link rel="stylesheet" href="css/home-page-food.css"> -->



</head>
<body>


<?php

include "templates/navbar.php";

echo "ADMIN PAGE";

include "templates/bottom.php";

?>