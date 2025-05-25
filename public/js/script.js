document.addEventListener("DOMContentLoaded", function () {
  // Back to top
var backToTopBtn = document.getElementById("backToTop");
var menuToggle = document.getElementById("menuToggle");
var height = window.screen.height;
var width = window.screen.width;

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

  // Navbar Toggle
  document.getElementById("menuToggle").addEventListener("click", function () {
    var sidebarMenu = document.getElementById("sidebarMenu");
  
    if (menuToggle.classList.contains("collapsed")) {
      menuToggle.classList.remove("collapsed");
      sidebarMenu.classList.add("show");
    } else {
      menuToggle.classList.add("collapsed");
      sidebarMenu.classList.remove("show");
    }
  });
});
