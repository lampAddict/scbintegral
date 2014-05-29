var imgFactor;

function resizeImage() {
    var image = $('#bg');
    var windowWidth = $(window).outerWidth();
    var windowHeight = 320;//$('body').outerHeight();

    image.width(windowWidth);

    if (image.outerHeight()<windowHeight){
        image.width(windowHeight*imgFactor);
    } else if (image.outerWidth()<windowWidth){
        image.width(windowWidth);
    }
}
$(window).resize(function(){
    resizeImage();
});
$(window).load(function(){
		imgFactor = $('#bg').width()/$('#bg').height();
    resizeImage();
});