let flag = true;

let menuButton = document.getElementsByClassName("menu-toggle-button")[0];

menuButton.addEventListener("click", (e) => {
  //   e.preventDefault();
  //   alert("hi");

  if (flag) {
    document.getElementsByClassName("hide-navbar-links")[0].style.display =
      "block";
    flag = false;
  } else {
    document.getElementsByClassName("hide-navbar-links")[0].style.display =
      "none";
    flag = true;
  }
});
