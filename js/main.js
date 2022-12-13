var overlay_addtocart = document.querySelector('.overlay_addtocart');
var nav_addtocart = document.querySelector('.nav_addtocart');
var cart_icon = document.querySelector('.cart_icon');
var icon_close_cart = document.querySelector('.icon_close-cart');
var main = document.querySelector('.main');
var model = document.querySelector('.model');
var nav_model = document.querySelector('.nav_model');
var icon_model = document.querySelector('.header_menu_right-icon');
var nav_model_close = document.querySelector('.nav_model_close');


function displayNone(none){
    none.style.display = 'none';
    return none;
}
function displayblock(block){
    block.style.display = 'block';
    return block;
}
cart_icon.addEventListener('click',function(event){
    event.preventDefault();
    displayblock(overlay_addtocart);
    main.classList.add("right");

})

overlay_addtocart.addEventListener('click',function(){
    displayNone(overlay_addtocart)
    main.classList.remove("right");
})

nav_addtocart.addEventListener('click',function(event){
    event.stopPropagation();
})

icon_close_cart.addEventListener('click',function(){
    displayNone(overlay_addtocart);
    main.classList.remove("right");
})

icon_model.addEventListener('click',() => {
    displayblock(model)
})

nav_model_close.addEventListener('click',() => {
    displayNone(model)
})

model.addEventListener('click',() => {
    displayNone(model)
})

nav_model.addEventListener('click',(event) => {
    event.stopPropagation();
})

