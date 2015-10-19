var imgFactor;

function _resize() {
    var image = $('#bg');
    var windowWidth = $(window).outerWidth();
    var windowHeight = 320;//$('body').outerHeight();

    image.width(windowWidth);

    if (image.outerHeight()<windowHeight){
        image.width(windowHeight*imgFactor);
    } else if (image.outerWidth()<windowWidth){
        image.width(windowWidth);
    }

    var _m = $('body>nav.navbar').height();
    $('div#page').css('margin-top',(_m - 50)+'px');
}

$(window).resize(function(){
    _resize();
});

$(window).load(function(){
	imgFactor = $('#bg').width()/$('#bg').height();
    _resize();
});

$( document ).ready(function() {
    $('#logo').click(function(){
       window.location.href = 'http://nppintegral.ru/';
    });
});