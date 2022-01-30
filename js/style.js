const menu = document.querySelector(".nav-menu");
const icon = document.querySelector(".icon");

icon.addEventListener("click", function () {
  menu.classList.toggle("hidden");
});

const containerLinks = document.querySelector(".nav-menu");
const links = document.querySelectorAll(".nav__item");

containerLinks.addEventListener("click", function (e) {
  // e.preventDefault();
  if (e.target.classList.contains("brands-list")) {
    const id = e.target.getAttribute("href");
    // console.log(e.target.getAttribute('href'));
    document.querySelector(id).scrollIntoView({
      behavior: "smooth",
    });
  }
});
