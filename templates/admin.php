<div class="container-fluid admin-container mt-5">


	<div class="aside-bar">
		<div class="card" >
  			<div class="card-header">
  				<h2>
  					<?php
    				echo $_SESSION['name'];
    			?>
  				</h2>
    			
  			</div>
  		<ul class="list-group list-group-flush">
    		<li class="list-group-item">
    			<a href="./addfood.php">Add Food</a>
    		</li>
    		
    		
  		</ul>
	</div>

	</div>

	<div class="main-container">
		<div class="admin-heading">
		<h2 class="text-center">Welcome to Admin Page</h2>
		</div>

	<div class="main-data">
		<ul class="list-group">

			<?php

			foreach ($foods as $food) { ?>
				<li class="list-group-item mt-2">
  					<ul>
  						<li><?php echo $food['foodName']; ?></li>
  						<li><?php echo $food['foodCategory']; ?></li>
  						<li>Rs:<?php echo $food['price']; ?></li>
  						<li><a href="./deletefood.php?id=<?php echo($food['id']) ?>"><i class="fas fa-trash-alt"></i></a></li>
  					</ul>
  				</li>

		<?php	}

			 ?>
  			
  			
  			
		</ul>
	</div>

	</div>

	
</div>