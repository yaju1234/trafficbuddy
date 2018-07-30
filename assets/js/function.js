$(document).ready(function(){
  jqueryUI();
  owlcarousal();
  uploadFile();
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

//Upload File For Contact Field
function uploadFile() {
  $("[type=file]").on("change", function(){
    // Name of file and placeholder
    var file = this.files[0].name;
    var dflt = $(this).attr("placeholder");
    if($(this).val()!=""){
      $(this).next().text(file);
    } else {
      $(this).next().text(dflt);
    }
  });
}