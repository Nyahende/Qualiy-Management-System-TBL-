$(document).ready(function(){
    $('#stat-tabbed-panel').tabs({
        active:0
    });
    $('.inner-stat-tabbed-panel').tabs({
        active:0
    });
    $('.stat-tabbed-ul ul li').click(function(){
        $(this).addClass('active').siblings().removeClass('active')
        });
    $('.inner-stat-tabbed-panel ul li').click(function(){
        $(this).addClass('active').siblings().removeClass('active')
        });   
});