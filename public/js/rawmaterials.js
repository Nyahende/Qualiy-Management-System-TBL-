$(document).ready(function(){
$('.rawmaterialstab').tabs();

$('.add-raw-material-btn').click(function(event){
    $('.raw-material-form-div').slideToggle();
    event.stopPropagation();      
  });
  $('upload-raw-btn').click(function(){
    $('.raw-material-form-div').slideUp();
});
});