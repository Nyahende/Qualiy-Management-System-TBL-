$(document).ready(function(){
    $('.released-products-tab').tabs();
    
    $('.add-released-product-btn').click(function(event){
        $('.released-product-form-div').slideToggle();
        event.stopPropagation();      
      });
      $('html').click(function(){
        $('.released-product-form-div').slideUp();
    });
    });