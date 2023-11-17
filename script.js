const navbarNav = document.querySelector(".navbar-nav");
document.querySelector("#menu-icon").onclick = () => {
  navbarNav.classList.toggle("active");
};
const menuicon = document.querySelector("#menu-icon");
document.addEventListener("click", function (e) {
    if (!menuicon.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove("active");
    }
});
