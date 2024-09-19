// search bar
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
  searchBar.style.right = "-40%";
  // if (tabLand.matches) {
  //   searchBar.style.right = "-45%";
  // }
}

// sticky nav
// $(".js-nav").waypoint(function (direction) {
//   if (direction == "down") {
//     $("nav").addClass("sticky");
//   } else {
//     $("nav").removeClass("sticky");
//   }
// });

//
const dropdown = document.querySelector(".dropdown");
if (dropdown.matches(":hover")) {
  console.log("Hi");
}
