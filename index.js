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

// active class for header start
const currentLocation = location.href;

const menuItem = document.querySelectorAll(".navbar-nav .nav-item a");

for (let i = 0; i < menuItem.length; i++) {
  if (menuItem[i].href === currentLocation) {
    if (menuItem[i].className === "nav-link") {
      menuItem[i].className = "nav-link active";
    } else if (menuItem[i].className === "dropdown-item") {
      menuItem[i].className = "dropdown-item active";
    }
  }
}

let checkPath = location.pathname.substr(0, location.pathname.lastIndexOf("/"));

if (location.pathname === "/") {
  menuItem[0].className = "nav-link active";
} else if (
  location.pathname === "/about-us.html" ||
  location.pathname === "/careers.html" ||
  location.pathname === "/faq.html"
) {
  menuItem[1].className = "nav-link dropdown-toggle active";
} else if (
  location.pathname === "/services.html" ||
  checkPath === "/services"
) {
  menuItem[5].className = "nav-link dropdown-toggle active";
} else if (checkPath === "/blogs") {
  menuItem[18].className = "nav-link active";
}

// active class for header end

// footerActive class for footer start
const footerMenuItem = document.querySelectorAll(".footer-section a");

for (let i = 0; i < footerMenuItem.length; i++) {
  if (footerMenuItem[i].href === currentLocation) {
    footerMenuItem[i].className = "text-decoration-none footerActive";
  }
}
// footerActive class for footer end

//counter section start

const counterSection = document.querySelector(".counter-section");

const counterObserver = new IntersectionObserver(
  (entries, observer) => {
    const [entry] = entries;
    if (!entry.isIntersecting) return;

    const counterNum = document.querySelectorAll(
      ".counter-section .counter-number"
    );
    const counterSpeed = 10;

    counterNum.forEach((curElem) => {
      const updateNumber = () => {
        const finalNumber = parseInt(curElem.dataset.number);
        const initialNumber = parseInt(curElem.innerText);

        const incrementNumber = Math.trunc(finalNumber / counterSpeed);

        if (initialNumber < finalNumber) {
          curElem.innerText = `${initialNumber + incrementNumber}+`;
          setTimeout(updateNumber, 50);
        }
      };

      updateNumber();
    });

    observer.unobserve(counterSection);
  },
  {
    root: null,
    threshold: 0,
  }
);

counterObserver.observe(counterSection);
//counter section end
