// sticky header start
window.onload = function () {
  var navbar = document.querySelector(".navbar");
  var sticky = 200;
  window.addEventListener("scroll", function () {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
    }
  });
};
// sticky header end

// animation start

// animation end
