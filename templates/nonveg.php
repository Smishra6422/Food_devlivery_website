<div class="home-page-food-container container non-veg-container">
	<div class="home-page-food-heading">
		<h2>Non-Veg Foods</h2>
	</div>

	<div class="home-page-food-lists">

        <?php

            foreach ($foods as $food) {
                $foodIngredients = explode(",",$food['Ingredients']);
                $price = $food['price'];
                $originalPrice = $food['originalPrice'];
                ?>
               
                
                
                    <div class="home-page-food-list">
                        <div class="card " >
                            <img src="<?php echo($food['image']) ?>" class="card-img-top" alt="...">
                            <!-- <hr class="dropdown-divider"> -->
                            <div class="card-body mt-1">
                                <h5><?php echo($food['foodName']) ?></h5>
                                <p class="ingredients">
                                    <?php
                                        foreach ($foodIngredients as $ingre) {
                                            ?>
                                             <span><?php echo $ingre; ?></span>

                                    <?php
                                        }
                                     ?>
                                    
                                </p>
                                <p class="price-container"> 
                                    <span>Rs:<?php echo($food['price']) ?></span> 
                                    <span class="original-price">Rs:<?php echo($food['originalPrice']) ?></span> 
                                    <span class="off-percent"><?php echo ceil((($originalPrice-$price)/$originalPrice)*100)."% off"; ?></span>
                                </p>
                
                                <?php
                                    if(!isset($_SESSION['role'])) {?>
                                        <a href="./order.php" class="btn order-button ">Order Now</a>
                                 <?php   }

                                 ?>
                
                            </div>
                        </div>
                    </div>
                
            
         <?php } ?>
	

		
	</div>


</div>