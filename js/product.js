"use strict";
const description = document.querySelector(".description");
const shipping = document.querySelector(".shipping");
const returni = document.querySelector(".return");
const hidden = document.querySelector(".desc");
const shipp = document.querySelector(".shipp");
const ret = document.querySelector(".ret");

const buttonUp = document.querySelectorAll(".button-down");

const image = document.querySelector(".img");

function myJsFunc() {
  description.addEventListener("click", function () {
    hidden.classList.remove("hidden");
    shipp.classList.add("hidden");
    ret.classList.add("hidden");
  });
  shipping.addEventListener("click", function () {
    hidden.classList.add("hidden");
    shipp.classList.remove("hidden");
    ret.classList.add("hidden");
  });
  returni.addEventListener("click", function () {
    hidden.classList.add("hidden");
    shipp.classList.add("hidden");
    ret.classList.remove("hidden");
  });
}

// buttonUp.addEventListener("click", function () {
//   image.classList.remove("hidden");
// });

// const minPhotos = document.querySelector(".min-photos-div").style.height;
// const maxPhotos = document.querySelector(".max-photos-div").style;
// // console.log(maxPhotos, minPhotos);

// if (minPhotos > maxPhotos) {
//   document.querySelector(".min-photos-div").style.height = maxPhotos;
// } else {
//   document.querySelector(".max-photos-div").style.height = minPhotos;
// }

//slider
const slides = document.querySelectorAll(".img");
document.getElementById("1").addEventListener("click", function () {
  console.log(e.target);
  const clicked = e.target.closest("img");
  console.log(clicked);
});
