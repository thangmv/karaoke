jQuery(function ($) {

    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });
    });


    var pic = '#room .single-pic';
    $(document).ready(function() {
        $(pic).mouseover(function() {
            $(this).find('.zoom').css('top','28%');
            $(this).find('.info').css('height','57px');
        });
        $(pic).mouseout(function() {
            $(this).find('.info').css('height','0');
            $(this).find('.zoom').css('top','-56px');
        });
    });

});