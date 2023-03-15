// nut gom menu
const menu = document.querySelector(".navbar-links")
const menuButton = document.querySelector(".navbar-icons")
const overlay = document.querySelector("#overlay")

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
//nut search
const overlaySearch = document.querySelector('#overlay-search')
const search = document.querySelector(".input-group-collap")
const searchButton = document.querySelector(".search-btn")

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

//Nut tang giam so luong mua sp
let dealElement = document.getElementById("deal");
let deal = dealElement.value;
let render = (deal) => {
    dealElement.value = deal;
}

let handlePlus = () => {
    deal++;
    render(deal);
}
let handleMinus = () => {
    if (deal > 1)
        deal--;
    render(deal);
}

dealElement.addEventListener('input',() => {
   deal = dealElement.value;
   deal = parseInt(deal);
   deal = (isNaN(deal)|| deal==0)?1:deal; 
   render(deal);
});