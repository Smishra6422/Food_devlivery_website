let foodName = document.getElementById("food-name");
let foodPrice = document.getElementById("price");
let foodOriginalPrice = document.getElementById("original-price");
let ingredients = document.getElementById("ingredients");

// let submitButton = document.getElementById("add-food-button");

// // Error variables
let foodNameError = "";
let foodPriceError = "";
let foodOriginalPriceError = "";
let ingredientsError = "";

foodName.addEventListener("keyup", () => {
  let foodNameValue = foodName.value;

  if (foodNameValue == "") {
    document.getElementById("name-error").innerHTML = "Please enter food name";
    foodNameError = "Please enter food name";
  } else if (foodNameValue.length < 3 || foodNameValue.length > 20) {
    document.getElementById("name-error").innerHTML =
      "Please enter food name between 3 to 20 character";
    foodNameError = "Please enter name between 3 to 20 character";
  } else {
    document.getElementById("name-error").innerHTML = "";
    foodNameError = "";
  }
});

foodPrice.addEventListener("keyup", () => {
  let foodPriceValue = foodPrice.value;

  if (foodPriceValue == "") {
    document.getElementById("price-error").innerHTML =
      "Please enter food price";
    foodPriceError = "Please enter food price";
  } else if (foodPriceValue > 5000) {
    document.getElementById("price-error").innerHTML =
      "Please enter food price less then  5000";
    foodPriceError = "Please enter food price less then  5000";
  } else {
    document.getElementById("price-error").innerHTML = "";
    foodPriceError = "";
  }
});

foodOriginalPrice.addEventListener("keyup", () => {
  console.log("hiii");
  let foodOriginalPriceValue = foodOriginalPrice.value;

  if (foodOriginalPriceValue == "") {
    document.getElementById("original-price-error").innerHTML =
      "Please enter food original price";
    foodOriginalPriceError = "Please enter food original price";
  } else if (foodOriginalPriceValue > 5000) {
    document.getElementById("original-price-error").innerHTML =
      "Please enter food price less then  5000";
    foodOriginalPriceError = "Please enter food original price less then  5000";
  } else {
    document.getElementById("original-price-error").innerHTML = "";
    foodOriginalPriceError = "";
  }
});

ingredients.addEventListener("keyup", () => {
  let ingredientsValue = ingredients.value;

  if (ingredientsValue === "") {
    document.getElementById("ingredients-error").innerHTML =
      "Please enter atleast one ingredients";
    ingredientsError = "Please enter atleast one ingredients";
  } else if (!/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/.test(ingredientsValue)) {
    document.getElementById("ingredients-error").innerHTML =
      "Email enter ingredients comma seprated";
    ingredientsError = "Email enter ingredients comma seprated";
  } else if (ingredientsValue.split(",").length > 4) {
    document.getElementById("ingredients-error").innerHTML =
      "Email enter only 4 ingredients";
    ingredientsError = "Email enter only 4 ingredients";
  } else {
    document.getElementById("ingredients-error").innerHTML = "";
    ingredientsError = "";
  }
});

document.getElementById("add-foods").addEventListener("click", (e) => {
  let vegFoodCategory = document.getElementsByClassName("food-category")[0]
    .checked;
  let nonVegFoodCategory = document.getElementsByClassName("food-category")[1]
    .checked;

  if (
    foodName.value === "" ||
    foodPrice.value === "" ||
    foodOriginalPrice.value === "" ||
    ingredients.value === ""
  ) {
    alert("Please fill the form!");
    e.preventDefault();
  }

  if (!vegFoodCategory && !nonVegFoodCategory) {
    document.getElementById("food-select-error").innerHTML =
      "Please select atleast one food category";
    e.preventDefault();
  } else if (vegFoodCategory || nonVegFoodCategory) {
    document.getElementById("food-select-error").innerHTML = "";
    // e.preventDefault();
  }

  if (
    foodNameError ||
    foodPriceError ||
    foodOriginalPriceError ||
    ingredientsError
  ) {
    e.preventDefault();
  }
});
