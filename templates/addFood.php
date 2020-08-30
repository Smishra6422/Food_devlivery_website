<div class="container ">
	<div class="row w-100 food-container">
		<div class="col-12 col-md-8 col-xxl-4">
			<div class="card pb-3 px-2">

				

				<!-- Food Image -->
				<div class="add-food-image">
					<div class="food-image">
						<img src="assets/loginlogo.svg" alt="Image_Logo" />
					</div>
				</div>

				<!-- User Login Page -->
				<div class="form add-food-container " id="add-food">
					<div class="login-title">
						<h4>Add Food</h4>
					</div>

					<form class="row g-3 " method="post" 
					action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

						<div class="form-file mb-3 mt-4">
  							<input type="file" class="form-file-input" name="image" id="customFile" accept="image/*">
  							<label class="form-file-label" for="customFile">
    						<span class="form-file-text">Choose file...</span>
    						<span class="form-file-button">Browse</span>
  							</label>
						</div>
						<div class="invalid-feedback"id="restaurant-email-error" style="display: block">
      							<?php echo($fileError) ?>
    					</div>


						<div class="mb-3">
  							<label for="name" class="form-label">Food Name</label>
  							<input type="text" class="form-control" id="food-name" placeholder="Food Name..." name="name" value="<?php echo($name) ?>">
  							<div class="invalid-feedback" id="name-error" style="display: block">
    						</div>
						</div>


						<div class="mb-2">
  							<label for="exampleFormControlInput1" class="form-label">Food Category</label>

  							<div>
  							<label class="form-check-label" for="veg">
    							Veg
  							</label>
  							<input class="form-check-input food-category" type="radio" name="foodCategory" value="veg" id="veg" checked>

  							<label class="form-check-label ml-3" for="nonveg">
  							   Non-Veg
  							 </label>

  							 <input class="form-check-input food-category" type="radio" name="foodCategory" value="nonveg" id="nonveg" >
  							</div>

  							<div class="invalid-feedback" id="food-select-error" style="display: block">
    						</div>
  							   							
						</div>

						<div class="mb-3">
  							<label for="price" class="form-label">Discounted Price</label>
  							<input type="number" class="form-control" id="price" placeholder="Discounted Price" name="price" value="<?php echo($price) ?>">
  							<div class="invalid-feedback"id="price-error" style="display: block">
      							
    						</div>
						</div>

						<div class="mb-3">
  							<label for="original-price" class="form-label">Original Price</label>
  							<input type="number" class="form-control" id="original-price" placeholder="Original Price" name="original-price" value="<?php echo($originalPrice) ?>">
  							<div class="invalid-feedback"id="original-price-error" style="display: block">
    						</div>
						</div>

						<div class="mb-3">
  							<label for="ingredients" class="form-label">Ingredients </label>
  							<textarea class="form-control" id="ingredients" name="ingredients" placeholder="Enter ingredients comma seprated ," rows="3" >
  								<?php echo($ingredients) ?>
  							</textarea>
  							<div class="invalid-feedback"id="ingredients-error" style="display: block">
      							
    						</div>
						</div>

						 <div class="col-12">
    						<button class="btn submit-button" id="add-foods" name="food-submit" type="">Add Now</button>
  						 </div>
						
					</form>
				</div>

				
			</div>
		</div>
	</div>
</div>