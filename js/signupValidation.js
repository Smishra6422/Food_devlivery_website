let userName = document.getElementById("user-name");
let userEmail = document.getElementById("user-email");
// let userName = document.getElementById('user')
let userPassword = document.getElementById("user-password");

let submitButton = document.getElementById("user-submit-button");

// Error variables
let userNameError = "";
let userEmailError = "";
let userPasswordError = "";

userName.addEventListener("keyup", () => {
  let userNameValue = userName.value;

  if (userNameValue == "") {
    // console.log("Please enter your name");
    document.getElementById("name-error").innerHTML = "Please enter your name";
    userNameError = "Please enter your name";
  } else if (userNameValue.length < 3 || userNameValue.length > 15) {
    console.log("Please enter name between 3 to 15 character");
    document.getElementById("name-error").innerHTML =
      "Please enter name between 3 to 15 character";
    userNameError = "Please enter name between 3 to 15 character";
  } else {
    document.getElementById("name-error").innerHTML = "";
    userNameError = "";
  }
});

userEmail.addEventListener("keyup", () => {
  let userEmailValue = userEmail.value;

  if (userEmailValue === "") {
    // console.log("Please enter your email");
    document.getElementById("email-error").innerHTML =
      "Please enter your email";
    userEmailError = "Please enter your email";
  } else if (
    !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(userEmailValue)
  ) {
    // console.log("Email enter valid email");
    document.getElementById("email-error").innerHTML =
      "Email enter valid email";
    userEmailError = "Email enter valid email";
  } else {
    document.getElementById("email-error").innerHTML = "";
    userEmailError = "";
  }
});

userPassword.addEventListener("keyup", () => {
  let userPasswordValue = userPassword.value;

  if (userPasswordValue === "") {
    // console.log("Please enter your password");
    document.getElementById("password-error").innerHTML =
      "Please enter your password";
    userPasswordError = "Please enter your password";
  } else if (userPasswordValue.length <= 6 || userPasswordValue.length > 12) {
    // console.log("Please enter your password 6 to 12 character long");
    document.getElementById("password-error").innerHTML =
      "Please enter your password 6 to 12 character long";
    userPasswordError = "Please enter your password 6 to 12 character long";
  } else {
    document.getElementById("password-error").innerHTML = "";
    userPasswordError = "";
  }
});

submitButton.addEventListener("click", (e) => {
  //   console.log(userName.value);
  let vegFood = document.getElementsByClassName("food-choice")[0].checked;
  let nonVegFood = document.getElementsByClassName("food-choice")[1].checked;

  if (
    userName.value === "" ||
    userEmail.value === "" ||
    userPassword.value === ""
  ) {
    alert("Please fill the form!");
    e.preventDefault();
  }

  if (!vegFood && !nonVegFood) {
    document.getElementById("food-select-error").innerHTML =
      "Please select atleast one food category";
    e.preventDefault();
  } else if (vegFood || nonVegFood) {
    document.getElementById("food-select-error").innerHTML = "";
    // e.preventDefault();
  }

  if (userNameError || userEmailError || userPasswordError) {
    e.preventDefault();
  }
});

// // RESTAURANT SIGNUP VALIDATION

let restaurantName = document.getElementById("restaurant-name");
let restaurantNumber = document.getElementById("restaurant-number");
let restaurantEmail = document.getElementById("restaurant-email");
let restaurantPassword = document.getElementById("restaurant-password");

let restaurantSubmitButton = document.getElementById(
  "restaurant-submit-button"
);

// Error variables
let restaurantNameError = "";
let restaurantEmailError = "";
let restaurantNumberError = "";
let restaurantPasswordError = "";

restaurantName.addEventListener("keyup", () => {
  console.log(restaurantName.value);
  let restaurantNameValue = restaurantName.value;

  if (restaurantNameValue == "") {
    // console.log("Please enter your name");
    document.getElementById("restaurant-name-error").innerHTML =
      "Please enter your name";
    restaurantNameError = "Please enter your name";
  } else if (
    restaurantNameValue.length < 3 ||
    restaurantNameValue.length > 15
  ) {
    document.getElementById("restaurant-name-error").innerHTML =
      "Please enter name between 3 to 15 character";
    restaurantNameError = "Please enter name between 3 to 15 character";
  } else {
    document.getElementById("restaurant-name-error").innerHTML = "";
    restaurantNameError = "";
  }
});

restaurantNumber.addEventListener("keyup", () => {
  let restaurantNumberValue = restaurantNumber.value;

  if (restaurantNumberValue === "") {
    // console.log("Please enter your email");
    document.getElementById("restaurant-number-error").innerHTML =
      "Please enter your number";
    restaurantNumberError = "Please enter your email";
  } else if (isNaN(restaurantNumberValue)) {
    // console.log("Email enter valid email");
    document.getElementById("restaurant-number-error").innerHTML =
      "Enter only digit/number not character";
    restaurantNumberError = "Enter only digit/number not character";
  } else if (
    restaurantNumberValue[0] !== "9" &&
    restaurantNumberValue[0] !== "8" &&
    restaurantNumberValue[0] !== "7" &&
    restaurantNumberValue[0] !== "6"
  ) {
    document.getElementById("restaurant-number-error").innerHTML =
      "Enter a valid inidan number";
    restaurantNumberError = "Enter a valid inidan number";
  } else if (restaurantNumberValue.length !== 10) {
    document.getElementById("restaurant-number-error").innerHTML =
      "Enter 10 digit mobile number";
    restaurantNumberError = "Enter 10 digit mobile number";
  } else {
    document.getElementById("restaurant-number-error").innerHTML = "";
    restaurantNumberError = "";
  }
});

restaurantEmail.addEventListener("keyup", () => {
  let restaurantEmailValue = restaurantEmail.value;

  if (restaurantEmailValue === "") {
    // console.log("Please enter your email");
    document.getElementById("restaurant-email-error").innerHTML =
      "Please enter your email";
    restaurantEmailError = "Please enter your email";
  } else if (
    !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(restaurantEmailValue)
  ) {
    // console.log("Email enter valid email");
    document.getElementById("restaurant-email-error").innerHTML =
      "Email enter valid email";
    restaurantEmailError = "Email enter valid email";
  } else {
    document.getElementById("restaurant-email-error").innerHTML = "";
    restaurantEmailError = "";
  }
});

restaurantPassword.addEventListener("keyup", () => {
  let restaurantPasswordValue = restaurantPassword.value;

  if (restaurantPasswordValue === "") {
    document.getElementById("restaurant-password-error").innerHTML =
      "Please enter your password";
    restaurantPasswordError = "Please enter your password";
  } else if (
    restaurantPasswordValue.length <= 6 ||
    restaurantPasswordValue.length > 12
  ) {
    document.getElementById("restaurant-password-error").innerHTML =
      "Please enter your password 6 to 12 character long";
    restaurantPasswordError =
      "Please enter your password 6 to 12 character long";
  } else {
    document.getElementById("restaurant-password-error").innerHTML = "";
    restaurantPasswordError = "";
  }
});

restaurantSubmitButton.addEventListener("click", (e) => {
  //   console.log(userName.value);

  if (
    restaurantName.value === "" ||
    restaurantEmail.value === "" ||
    restaurantNumber.value === "" ||
    restaurantPassword.value === ""
  ) {
    alert("Please fill the form!");
    e.preventDefault();
  }

  if (
    restaurantNameError ||
    restaurantEmailError ||
    restaurantNumberError ||
    restaurantPasswordError
  ) {
    e.preventDefault();
  }
});
