$(document).ready(function(){
  jqueryUI();
  owlcarousal();
});



//Accordian Jquery UI
function jqueryUI() {
  $( "#accordion" ).accordion();
}

//Owl Carousal
function owlcarousal() {
  $(".two-item-slide").owlCarousel({
    loop:true,
    navigation:true,
    items:1,
    autoplay:true,
    margin:0,
    smartSpeed:3000,
    responsive:{
      0:{
      items:1,
      margin:0,
      autoplay:true,
      }
    }
  });
}