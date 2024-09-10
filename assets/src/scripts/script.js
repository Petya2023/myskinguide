const searchIcon = document.querySelector(".search-icon-js");
const searchBar = document.querySelector(".search-bar-js");
const overlayBox = document.querySelector(".overlay-box");
const crossIcon = document.querySelector(".cross-icon");

searchIcon.addEventListener("click", openSearchBar);
crossIcon.addEventListener("click", closeSearchBar);
overlayBox.addEventListener("click", closeSearchBar);

const tabLand = window.matchMedia("(max-width: 1200px)");

function openSearchBar() {
  overlayBox.style.opacity = "1";
  overlayBox.style.visibility = "visible";
  searchBar.style.right = "0";
}

function closeSearchBar() {
  overlayBox.style.opacity = "0";
  overlayBox.style.visibility = "hidden";
  searchBar.style.right = "-35%";
  if (tabLand.matches) {
    searchBar.style.right = "-45%";
  }
}
