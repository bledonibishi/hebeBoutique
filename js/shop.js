"use strict";

const Shop = document.querySelector(".shopHover");

const shopList = document.querySelector(".shop-list");

shopList.addEventListener("mouseenter", function () {
  Shop.classList.toggle("active");
});
Shop.addEventListener("mouseleave", function () {
  Shop.classList.toggle("active");
});
