     $(".search_input").hide( );
  $(".search_btn").click(function(){
       $(".search_input").show( );
      $(".search_input").toggleClass("active").focus;
      $(this).toggleClass("animate");
      $(".search_input").val("");
});

 

function pc (){
var swiper = new Swiper('.swiper', {  slidesPerView: 3,  spaceBetween: 0,
      pagination: { el: '.swiper-pagination', clickable: true, }, });

var swiper3 = new Swiper('.partners_container', { slidesPerView: 5, spaceBetween:10, });
 
var swiper2 = new Swiper('.swiper2', { slidesPerView: 2, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper4 = new Swiper('.latest_news-container', { slidesPerView: 2, spaceBetween: 30, slidesPerGroup: 2,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper5 = new Swiper('.swiper5', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.carousel-control-next', prevEl: '.carousel-control-prev', }, });      
      
}
function mobile (){
  var swiper = new Swiper('.swiper', {  slidesPerView: 1,  spaceBetween: 0,
      pagination: { el: '.swiper-pagination', clickable: true, }, });

var swiper3 = new Swiper('.partners_container', { slidesPerView: 5, spaceBetween:10, });
 
var swiper2 = new Swiper('.swiper2', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper4 = new Swiper('.latest_news-container', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper5 = new Swiper('.swiper5', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.carousel-control-next', prevEl: '.carousel-control-prev', }, });    
}



function getResponsive(x) {
  if (x.matches) { // If media query matches
        mobile ();
}else{
  pc () ;
}

}

var x = window.matchMedia("(max-width: 780px)")
getResponsive(x) // Call listener function at run time
x.addListener(getResponsive) // Attach listener function on state changes


 

var x = window.matchMedia("(max-width: 780px)")
getResponsive(x) // Call listener function at run time
x.addListener(getResponsive) // Attach listener function on state changes







$(function() {
var Accordion = function(el, multiple) {
this.el = el || {};
this.multiple = multiple || false;

var links = this.el.find('.link');

links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
}

Accordion.prototype.dropdown = function(e) {
var $el = e.data.el;
$this = $(this),
$next = $this.next();

$next.slideToggle();
$this.parent().toggleClass('open');

if (!e.data.multiple) {
$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
};
}

var accordion = new Accordion($('#accordion'), false);
});







