$(document).ready(function(){
$('#soptabbedpanel').tabs({
    active:0
});
$('.soptabbedul ul li').click(function(){
    $(this).addClass('active').siblings().removeClass('active')
    });
});