$(function(){
    $('#ph_looper').each(function(){
        var loopsliderWidth = $(this).width();
        var loopsliderHeight = $(this).height();
		var loopSpeed = 600;
        $(this).children('ul').wrapAll('<div class="loopslider_wrap"></div>');

        var listWidth = $('.loopslider_wrap').children('ul').children('li').width();
        var listCount = $('.loopslider_wrap').children('ul').children('li').length;

        var loopWidth = (listWidth)*(listCount);

        $('.loopslider_wrap').css({
            top: '0',
            left: '0',
            width: ((loopWidth) * 2),
            height: (loopsliderHeight),
            overflow: 'hidden',
            position: 'absolute'
        });

        $('.loopslider_wrap ul').css({
            width: (loopWidth)
        });
        loopsliderPosition();

        function loopsliderPosition(){
            $('.loopslider_wrap').css({left:'0'});
            $('.loopslider_wrap').stop().animate({left:'-' + (loopWidth) + 'px'},loopSpeed,'linear');
            setTimeout(function(){
                loopsliderPosition();
            },loopSpeed);
        };

        $('.loopslider_wrap ul').clone().appendTo('.loopslider_wrap');
    });
});