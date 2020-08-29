let restaurantLoginForm = document.getElementById("restaurant-login");
let userLoginForm = document.getElementById("user-login");

// User and Restaurant Button selector

let restaurantLoginButton = document.getElementsByClassName(
  "restaurant-form-button"
)[0];
let userLoginButton = document.getElementsByClassName("user-form-button")[0];

restaurantLoginButton.addEventListener("click", () => {
  userLoginForm.style.display = "none";
  restaurantLoginForm.style.display = "block";
});

userLoginButton.addEventListener("click", () => {
  restaurantLoginForm.style.display = "none";
  userLoginForm.style.display = "block";
});

////

// document
//   .getElementsByClassName("submit-button")[0]
//   .addEventListener("click", (e) => {
//     e.preventDefault();
//   });
