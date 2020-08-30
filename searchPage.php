<?php 

session_start();

?>

<?php


// DB FILE
include 'dbConnection.php';

		$searchResultCount = 0;
		$foods = "";

		if (isset($_GET["search"])) {
			$searchInput = testInputData($_GET["search"]);

			// $searchInput = strtolower($searchInput);
			// echo $searchInput;

			$searchQuery = "SELECT * FROM food WHERE foodName='$searchInput' OR foodCategory='$searchInput'";
			$searchResult = mysqli_query($con,$searchQuery);

			$searchResultCount =  mysqli_num_rows($searchResult);

			if($searchResultCount<1) {
				$foodDataQuery = " select * from food";
  		 		$query = mysqli_query($con,$foodDataQuery);

  		 		// $foodCount = mysqli_num_rows($query);

  		 		$foods = mysqli_fetch_all($query,MYSQLI_ASSOC);
			} else {
				$foods = mysqli_fetch_all($searchResult,MYSQLI_ASSOC);
			}
		} else {
			$foodDataQuery = " select * from food";
  		 	$query = mysqli_query($con,$foodDataQuery);

  		 	// $foodCount = mysqli_num_rows($query);

  		 	$foods = mysqli_fetch_all($query,MYSQLI_ASSOC);
		}

		

		

		

  		 // foreach ($foods as $food ) {
  		 // 	print_r($food['foodName']);
  		 // 	echo "<br />";
  		 // }

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
<link rel="stylesheet" href="css/home-page-food.css">
<link rel="stylesheet" href="css/search-page.css">



</head>
<body>


<?php

include "templates/navbar.php";



include "templates/searchPage.php";

include "templates/footer.php";

include "templates/bottom.php";

?>