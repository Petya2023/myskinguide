const searchIcon = document.querySelector(".search-icon-js");
const searchBar = document.querySelector(".search-bar-js");
const overlayBox = document.querySelector(".overlay-box");
const crossIcon = document.querySelector(".cross-icon");

searchIcon.addEventListener("click", openSearchBar);
crossIcon.addEventListener("click", closeSearchBar);
overlayBox.addEventListener("click", closeSearchBar);

function openSearchBar() {
  overlayBox.style.opacity = "1";
  overlayBox.style.visibility = "visible";
  searchBar.style.opacity = "1";
  searchBar.style.visibility = "visible";
}

function closeSearchBar() {
  overlayBox.style.opacity = "0";
  overlayBox.style.visibility = "hidden";
  searchBar.style.opacity = "0";
  searchBar.style.visibility = "hidden";
}
