$(document).ready(function(){
    $('#signupslide').click(function(event){
      $('.signupform').slideToggle();
      $('.indexslideshow').slideToggle();
      event.stopPropagation();      
    });
    $('.signupform').click(function(event){
        event.stopPropagation();
    });
    $('html').click(function(){
        $('.signupform').slideUp();
      $('.indexslideshow').slideDown();

    });
    $('#loginslide').click(function(){
        $('.signupform').slideUp();
    });

    $('#loginslide').click(function(event){
        $('.loginform').slideToggle();
      $('.indexslideshow').slideToggle();
        event.stopPropagation();      
      });
      $('.loginform').click(function(event){
          event.stopPropagation();
      });
      $('html').click(function(){
          $('.loginform').slideUp();
      $('.indexslideshow').slideDown();

      });
      $('#signupslide').click(function(){
        $('.loginform').slideUp();
    });
     $('.add-sop-btn').click(function(){
       $('.adsopformdiv').slideToggle();
     });
    $('.upload-raw-btn').click(function(){
       $('.adsopformdiv').slideUp();
    });
});

 