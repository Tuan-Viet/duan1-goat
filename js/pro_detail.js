$('.carts_related').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
  nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
});

// $('.list_thumbs').slick({
//   infinite: true,
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
//   nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
// });


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

let elementNumber = document.querySelector('.form_control-quantity');
let numberValue = elementNumber.value;
const amountMinus = document.querySelector('.amountMinus');
const amountPlus = document.querySelector('.amountPlus');

amountMinus.addEventListener('click',(event) => {
  event.preventDefault();
})   
amountPlus.addEventListener('click',(event) => {
  event.preventDefault();
})   


render = (numberValue) => {
  elementNumber.value = numberValue;
}
handleMinus = () => {
  if(numberValue > 1)
  numberValue--
  render(numberValue);
}
handlePlus = () => {
  numberValue++
  render(numberValue);
}

elementNumber.addEventListener('input',() => {
  numberValue = elementNumber.value
  numberValue = parseInt(numberValue)
  numberValue = (isNaN(numberValue) || numberValue <= 0) ? 1 : numberValue;
  render(numberValue)
  // console.log(numberValue)
})

