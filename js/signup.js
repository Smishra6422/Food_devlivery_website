let restaurantSignupForm = document.getElementById("restaurant-signup");
let userSignupForm = document.getElementById("user-signup");

// User and Restaurant Button selector

let restaurantSignupButton = document.getElementsByClassName(
  "restaurant-form-button"
)[0];
let userSignupButton = document.getElementsByClassName("user-form-button")[0];

restaurantSignupButton.addEventListener("click", () => {
  userSignupForm.style.display = "none";
  restaurantSignupForm.style.display = "block";
});

userSignupButton.addEventListener("click", () => {
  restaurantSignupForm.style.display = "none";
  userSignupForm.style.display = "block";
});
