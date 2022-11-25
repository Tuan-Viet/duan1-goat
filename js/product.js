var icon_open_overlay = document.querySelector('.cart_icon-plus');
var overlay_cart = document.querySelector('.overlay_cart');
var nav_overlay_cart = document.querySelector('.nav_overlay-cart');
var icon_close = document.querySelector('.icon_close');


if (icon_open_overlay) {
    icon_open_overlay.addEventListener('click',function(){
        overlay_cart.style.display = 'flex';
    })
}

if (icon_close) {
    icon_close.addEventListener('click',function(){
        overlay_cart.style.display = 'none';
    })
}

if (overlay_cart) {
    overlay_cart.addEventListener('click',function(){
        overlay_cart.style.display = 'none';
    })
}

function changecolor(event){
    const colors = document.querySelector(".colors_pro").children;
    // console.log(colors);
    document.querySelector('.img_overlay-pro').src=event.children[0].src;
    for(let i = 0 ; i < colors.length ; i ++) {{
        colors[i].classList.remove("active");
    }}
    event.classList.add("active");
}

// overlay_cart.addEventListener('click',overlay_none)
// icon_close.addEventListener('click',overlay_none)


nav_overlay_cart.addEventListener('click',function(event){
    event.stopPropagation(); 
})

