const hamburger = document.querySelector(".__hamburger");
const navMenu = document.querySelector(".__mobile_nav");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})