$(document).ready(function(){
  pageloader();
  fixedheader();
  scrollimation();
  jqueryUI();
});



//Website Page Loader
function pageloader() {
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
}


//Fixed Header
function fixedheader() {
  jQuery(window).scroll(function() {
    if(jQuery(window).scrollTop() > 0) {
    jQuery(".header").addClass("fixed");
    } else {
    //remove the background property so it comes transparent again (defined in your css)
    jQuery("header").removeClass("fixed");
    }
  });
}


//scrollimation
function scrollimation() {
  $(window).load(function(){
    
    $('.scrollimation').waypoint(function(){
      $(this).addClass('in');
    },{offset:'95%'});
    
  });
}


//Accordian Jquery UI
function jqueryUI() {
  $( "#accordion" ).accordion();
}