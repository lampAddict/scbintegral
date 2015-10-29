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


    $(".view-full-size").click(function(e) {
        $.each($('.view-full-size'), function(i, el){
            if( el != e.currentTarget ){
                $(el).show();
                $(el).css('width','200px').css('border','none');
            }
            else{
                var $fsi = $(el).css('border','').clone();

                $(el).css('width','210px').css('border','3px solid #337ab7');

                $('#fullSizeImg').find('img').remove();
                $('#fullSizeImg').append($fsi);
                $fsi.css('width','100%').slideDown(350);
            }

        });

        return false;
    });
});