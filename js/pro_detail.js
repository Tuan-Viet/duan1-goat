$('.carts_related').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
  nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
});

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

