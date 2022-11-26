$('.carts_related').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
  nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
});


const tabs = document.querySelectorAll('.tab');
const panels = document.querySelectorAll('.tab_panel');

const tabActive = document.querySelector('.tab.active');
const line = document.querySelector('.nav_tabs-menu .line');

line.style.left = tabActive.offsetLeft + 'px';
line.style.width = tabActive.offsetWidth + 'px';


tabs.forEach((tab,index) => {
  const pane = panels[index];
  tab.onclick = function () {
    document.querySelector('.tab.active').classList.remove('active');
    document.querySelector('.tab_panel.active').classList.remove('active');

    line.style.left = this.offsetLeft + 'px';
    line.style.width = this.offsetWidth + 'px';

    this.classList.add("active");
    pane.classList.add("active");
  }
})
const thumbss = document.querySelector('.thumb_photo');
// console.log(thumbss.classList.remove('active'));

function changeimg(event){
  const thumbs = document.querySelector('.list_thumbs').children;
  document.querySelector('.img_pro-main').src=event.children[0].src;
  for(let i = 0 ; i < thumbs.length ; i ++) {{
    thumbs[i].classList.remove("active");
  }}
  event.classList.add("active");
}
// thumbss.forEach((thumb,index) => {
//   thumb.onclick = function() {
//     document.querySelector('.thumb_photo.active').classList.remove('active');
//     this.classList.add("active");
//   }
// })
// console.log(tabs,panels);

// $('.box_pro-main').slick({
//   infinite: true,
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
//   nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
// });

// $('.box_pro-main').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: false,
//   fade: true,
  // asNavFor: '.photo_pro-main'
// });
// $('.photo_pro-main').slick({
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   asNavFor: '.box_pro-main',
//   dots: true,
//   centerMode: true,
//   focusOnSelect: true
// });

// const color_btns = document.querySelectorAll('.color');
// color_btns.forEach(color => {
// color.addEventListener('click' , () => {
//   let colorNameClass = color.className;
//   if(!color.classList.contains('active_color')){
//     let colorName = colorNameClass.slice(colorNameClass.indexOf('_') + 1, colorNameClass.length);
//     resetActivebtns();
//     color.classList.add('active_color');
//     setNewcolor(colorName);
//   }
// })
// })

// function resetActivebtns(){
// color_btns.forEach(color => {
//   color.classList.remove('active_color');
// });
// }

// function setNewcolor(color) {
// document.querySelector('.img_pro-main').src =`./images/products/AT1_${color}.jpg`;
// }

