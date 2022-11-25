var overlay_addtocart = document.querySelector('.overlay_addtocart');
var nav_addtocart = document.querySelector('.nav_addtocart');
var cart_icon = document.querySelector('.cart_icon');
var icon_close_cart = document.querySelector('.icon_close-cart');
var main = document.querySelector('.main');

cart_icon.addEventListener('click',function(event){
    event.preventDefault();
    overlay_addtocart.style.display = 'block';
    nav_addtocart.style.display = 'block';
    main.classList.add("right");

})

overlay_addtocart.addEventListener('click',function(){
    overlay_addtocart.style.display = 'none';
    main.classList.remove("right");
})

nav_addtocart.addEventListener('click',function(event){
    event.stopPropagation();
})

icon_close_cart.addEventListener('click',function(){
    overlay_addtocart.style.display = 'none';
    main.classList.remove("right");
})

