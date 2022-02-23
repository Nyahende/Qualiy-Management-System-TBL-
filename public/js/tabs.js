$(document).ready(function(){
$('#tabbedpanel').tabs({
    active:0
});
$('.tabbedul ul li').click(function(){
$(this).addClass('active').siblings().removeClass('active')
});
$('.engineerstabbedul ul li').click(function(){
    $(this).addClass('active').siblings().removeClass('active')
    });
});