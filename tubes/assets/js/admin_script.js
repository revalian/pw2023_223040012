let navbar = document.querySelector(".header .navbar");
let accountBox = document.querySelector(".header .account-box");

document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
  accountBox.classList.remove("active");
};

document.querySelector("#user-btn").onclick = () => {
  accountBox.classList.toggle("active");
  navbar.classList.remove("active");
};

window.onscroll = () => {
  navbar.classList.remove("active");
  accountBox.classList.remove("active");
};

document.querySelector("#close-update").onclick = () => {
  document.querySelector(".edit-product-form").style.display = "none";
  window.location.href = "admin_product.php";
};

const keyword = document.getElementById("keyword");
const searchContainer = document.getElementById("search-container");
const searchButton = document.getElementById("search-button");

searchButton.style.display = "none";

keyword.onkeyup = function () {
  fetch("ajax/search.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));
};
