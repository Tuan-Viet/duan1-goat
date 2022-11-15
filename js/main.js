$(document).ready(function(){
    $('.outfits_list').slick({
        
        prevArrow:"<button type='button' class='slick-prev pull-left'><ion-icon name='arrow-back-outline'></ion-icon></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><ion-icon name='arrow-forward-outline'></ion-icon></button>"
    });
});

var overlay_search = document.querySelector('.overlay_search-header');
var overlay_search_focus = document.querySelector('.focus_overlay-search');
var search_header = document.querySelector('.search_header');
var close_search = document.querySelector('.close_search');

search_header.addEventListener('click', function(event){
    event.preventDefault();
    overlay_search.style.display = 'block';
})

function search_none(){
    overlay_search.style.display = 'none';
}

close_search.addEventListener('click',function(){
    search_none();
})


overlay_search.addEventListener('click',function(){
    search_none();
})

overlay_search_focus.addEventListener('click',function(event){
    event.stopPropagation();
})



