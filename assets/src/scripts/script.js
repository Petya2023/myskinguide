const searchIcon = document.querySelector(".search-icon-js");
const searchBar = document.querySelector(".search-bar-js");
searchIcon.addEventListener("click", openSearchBar);

function openSearchBar() {
  searchBar.style.display = "block";
  console.log("HI");
}
