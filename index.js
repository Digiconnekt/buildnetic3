window.onload = function () {
  var navbar = document.querySelector(".navbar");
  var sticky = 500;
  window.addEventListener("scroll", function () {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
    }
  });
};
