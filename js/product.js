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

if(nav_overlay_cart){
    nav_overlay_cart.addEventListener('click',function(event){
        event.stopPropagation(); 
    })
}



let carts = document.querySelectorAll('.cart');
let cart = document.querySelector('.cart');

let perpage = 16;
let currentPage = 1;
let start = 0;
let end = perpage;

const totalPage = Math.ceil(carts.length / perpage);
// console.log(totalPage);

let btn_row_right = document.querySelector('.content__paging__row-right');
let btn_row_left = document.querySelector('.content__paging__row-left');

// console.log();

function getCurrentPage(currentPage) {
    start = perpage * (currentPage - 1);
    end = perpage * currentPage;
}
function renderCarts() {
    carts.forEach((item, key) => {
        if (key >= start && key < end) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    })
}
renderCarts();
renderListPage();

function renderListPage() {
    let html = '';
    html += `<li class="active"><a>${1}</a></li>`
    for (let i = 2; i <= totalPage; i++) {
        html += `<li><a>${i}</a></li>`
    }
    document.querySelector('.number_page').innerHTML = html;
}
// renderListPage()

function changePage() {
    const listPage = document.querySelectorAll('.number_page li');
    // console.log(listPage)
    for(let i = 0 ; i < listPage.length ; i++ ){
        listPage[i].addEventListener('click', () => {
            // console.log(i)
            let value = i + 1;
            currentPage = value;
            $('.number_page li').removeClass('active');
            listPage[i].classList.add('active');
            getCurrentPage(currentPage);
            renderCarts();
        })

    }
}
changePage()

btn_row_right.addEventListener('click', () => {
    currentPage++;
    if (currentPage > totalPage) {
        currentPage = totalPage;
    }

    if(currentPage === totalPage) {
        $('.content__paging__row-right').addClass('btn_active');
    }
    $('.content__paging__row-left').removeClass('btn_active')
    $(`.number_page li`).removeClass('active');
    $(`.number_page li:eq(${currentPage - 1})`).addClass('active');
    getCurrentPage(currentPage);
    renderCarts();
})
btn_row_left.addEventListener('click', () => {
    currentPage--;
    if (currentPage < 1) {
        currentPage = 1;
    }
    if(currentPage === 1) {
        $('.content__paging__row-left').addClass('btn_active');
    }
    $(`.number_page li`).removeClass('active');
    $(`.number_page li:eq(${currentPage - 1})`).addClass('active');
    $('.content__paging__row-right').removeClass('btn_active')
    getCurrentPage(currentPage);
    renderCarts();
})
