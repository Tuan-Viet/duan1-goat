var icon_open_overlay = document.querySelector('.cart_icon-plus');
var overlay_cart = document.querySelector('.overlay_cart');
var nav_overlay_cart = document.querySelector('.nav_overlay-cart');
var icon_close = document.querySelector('.icon_close');

function overlay_none(){
    overlay_cart.style.display = 'none';
}

if (icon_open_overlay) {
    icon_open_overlay.addEventListener('click',function(){
        overlay_cart.style.display = 'flex';
    })
}

overlay_cart.addEventListener('click',overlay_none)
icon_close.addEventListener('click',overlay_none)


nav_overlay_cart.addEventListener('click',function(event){
    event.stopPropagation(); 
})

