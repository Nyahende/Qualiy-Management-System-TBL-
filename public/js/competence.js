$(document).ready(function(){
$('#tabbed-panel-competence').tabs();
$('.add-worker-btn').click(function(event){
    $('.worker-form-div').slideToggle();
    event.stopPropagation();      
  });
  $('upload-raw-btn').click(function(){
    $('.worker-form-div').slideUp();
});
$('.add-tool-btn').click(function(event){
    $('.tool-form-div').slideToggle();
    event.stopPropagation();      
  });
  $('.add-training-btn').click(function(event){
    $('.training-form-div').slideToggle();
    event.stopPropagation();      
  });
  $('upload-raw-btn').click(function(){
    $('.tool-form-div').slideUp();
});
$('upload-raw-btn').click(function(){
  $('.training-form-div').slideUp();
});
$('.add-safety-gear-btn').click(function(event){
    $('.safety-form-div').slideToggle();
    event.stopPropagation();      
  });
  $('upload-raw-btn').click(function(){
    $('.safety-form-div').slideUp();
});
});