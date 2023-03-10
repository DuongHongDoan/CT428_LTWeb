// nut gom menu
const menu = document.querySelector(".navbar-links")
const menuButton = document.querySelector(".navbar-icons")
const overlay = document.querySelector("#overlay")
const overlaySearch = document.querySelector('#overlay-search')
const search = document.querySelector(".input-group-collap")
const searchButton = document.querySelector(".search-btn")

menuButton.addEventListener('click', ()=> { 
    menu.classList.toggle("navbar-open"); 
    menuButton.classList.toggle("icon-back");
    overlay.classList.toggle("show");
});

overlay.addEventListener('click', () => {
    menu.classList.toggle("navbar-open"); 
    menuButton.classList.toggle("icon-back");
    overlay.classList.toggle("show");
});

searchButton.addEventListener('click', ()=> {
    search.classList.toggle("search-open");
    searchButton.classList.toggle("cancle-btn");
    overlaySearch.classList.toggle("show-search");
});

overlaySearch.addEventListener('click', () => {
    search.classList.toggle("search-open");
    searchButton.classList.toggle("cancle-btn");
    overlaySearch.classList.toggle("show-search");
});