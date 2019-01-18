$(document).ready(function(){
    var div=$('.header');
    var start=$(div).offset().top;

    $.event.add(window,'scroll',function(){
        var p=$(window).scrollTop();
        $(div).css('position',(p>start)?'fixed':'static');
        $(div).css('top',(p>start)?'0px':'');
        if (p>start) $(div).addClass("fixed-header")
        else $(div).removeClass("fixed-header")
    });
});
