
$('.carts_related').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  });

function changeimg(event){
  const color = document.querySelector('.colors_pro').children;
  document.querySelector('.img_pro-main').src=event.children[0].src;
  for(let i = 0 ; i < color.length ; i ++) {{
    color[i].classList.remove("active");
  }}
  event.classList.add("active");
}