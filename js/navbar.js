const showNavButton = document.querySelector(".show-navbar");
const navbari = document.querySelector(".navbari");

showNavButton.addEventListener("click", function () {
  navbari.classList.remove("hidden");
});
