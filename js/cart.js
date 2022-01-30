"use strict";

const modal = document.querySelector(".cart-div");
const overlay = document.querySelector(".overlay");
const btnCloseModal = document.querySelector(".close-cart");
const btnShowModal = document.querySelectorAll(".show-cart");
const navbar = document.querySelector(".navbar");
const body = document.querySelector(".bodyy");

const openModal = function (e) {
  e.preventDefault();
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
  // body.classList.add("scrolla");
  navbar.classList.remove("sticky-top");
  navbar.classList.add("hidden");
};
const closeModal = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");
  // body.classList.remove("scrolla");
  navbar.classList.add("sticky-top");
  navbar.classList.remove("hidden");
};
function myFunction() {
  for (let i = 0; i < btnShowModal.length; i++) {
    btnShowModal[i].addEventListener("click", openModal);

    btnCloseModal.addEventListener("click", closeModal);

    overlay.addEventListener("click", closeModal);

    document.addEventListener("keydown", function (e) {
      console.log(e.key);

      if (e.key === "Escape") {
        if (!modal.classList.contains("hidden")) {
          closeModal();
        }
      }
    });
  }
}
myFunction();

//cart input changing
const minus = document.querySelector("#minus");
const plus = document.querySelector("#plus");
let inputField = document.querySelector(".input-text");
let stok = document.querySelector(".stok");
// console.log(inputField.value);

// plus.addEventListener("click", function () {
//   if (inputField.value === stok) {
//     inputField.value = 1;
//   } else {
//     inputField.value++;
//   }
// });

// minus.addEventListener("click", function () {
//   if (inputField.value === 1) {
//     inputField.value = stok;
//   } else {
//     inputField.value--;
//   }
// });
