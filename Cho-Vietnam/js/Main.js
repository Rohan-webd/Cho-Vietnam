var myCarousel = document.querySelector("#carouselExampleIndicators");
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000,

});



let Menu = document.getElementById("menu");
let Nav = document.getElementById("add-nav");
let ToHide = document.getElementById("sm-screen");
let Close = document.getElementById("close");

Menu.addEventListener("click", () => {
    Nav.classList.add("active");
    Menu.style.display = "none";
    ToHide.style.display = "none";
    Close.style.display = "block";

});

Close.addEventListener("click", () => {
    Nav.classList.remove("active");
    Menu.style.display = "block";
    ToHide.style.display = "block";
    Close.style.display = "none";
});

let Regbtn = document.getElementById("confirm-btn");

Regbtn.addEventListener("click", () => {



});

let SUbscribe = document.getElementById("sub");

SUbscribe.addEventListener("click", () => {



})

let