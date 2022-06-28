//import Cookies from 'js-cookie'



// JS-secelct функционалл

$(document).ready(function(){
	$(".location").selecter({
    });
});

$(document).ready(function(){
	$(".select-subject").selecter({
    });
});

$(document).ready(function(){
	$(".select-style").selecter({
    });
    /** При клике на большое изображение удаляем из набора повторения **/
    $('.js-gallery-large').click(function() {
        var tmp = [];
    
        for(var i=0;i<$.fancybox.group.length;i++) {
            if($.inArray($.fancybox.group[i].href, tmp) != -1) {
                $.fancybox.group.splice(i,1);
            } else {
                tmp.push($.fancybox.group[i].href)
            }
        }
        
        return false;
    });
    
});

$(document).ready(function(){
	$(".select-availability").selecter({
    });
});

// Добавление класса при добавление в избранное
$('.js-active-favorites').on('click', function() {
   $(this).toggleClass('is-active');
});


/** Подключаем карусель **/
if($(window).outerWidth() < 430) {
    $('.js-gallery-carousel>ul').bxSlider({
        pager: false,
        minSlides: 3,
        maxSlides: 3,
        slideWidth: 9999,
        slideMargin: 8,
        nextText: '',
        prevText: ''
    });
} else {
    $('.js-gallery-carousel>ul').bxSlider({
        pager: false,
        minSlides: 6,
        maxSlides: 6,
        slideWidth: 9999,
        slideMargin: 8,
        nextText: '',
        prevText: ''
    });
}
if($(window).outerWidth() < 430) {
    $('.js-gallery-carousel-product>ul').bxSlider({
        pager: false,
        minSlides: 2,
        maxSlides: 2,
        slideWidth: 9999,
        slideMargin: 8,
        nextText: '',
        prevText: ''
    });
} else {
    $('.js-gallery-carousel-product>ul').bxSlider({
        pager: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 9999,
        slideMargin: 8,
        nextText: '',
        prevText: ''
    });
}




/** Выравнивание высоты блоков **/
    function equalBlocks() {
        ;( function( $, window, document, undefined )
        {
            'use strict';
    
            $( '.js-equal-list' ).each( function() {
                var $list       = $( this ),
                    $items      = $list.find( '.js-equal-item:visible' ),
                    setHeights  = function()
                    {
                        $items.css( 'height', 'auto' );
    
                        var perRow = Math.floor( $list.width() / ($items.width()-1) );
                        if( perRow == null || perRow < 2 ) return true;
    
                        for( var i = 0, j = $items.length; i < j; i += perRow )
                        {
                            var maxHeight   = 0,
                                $row        = $items.slice( i, i + perRow );
    
                            $row.each( function()
                            {
                                var itemHeight = parseInt( $( this ).outerHeight() );
                                if ( itemHeight > maxHeight ) maxHeight = itemHeight;
                            });
                            $row.css( 'height', maxHeight );
                        }
                    };
    
                setHeights();
                $( window ).on( 'resize', setHeights );
            });
        })( jQuery, window, document );
    }
    
    var $quickView = $('<div id="quick-view"></div>').appendTo('#wrapper'),
        $quickViewOverlay = $('<div id="quick-view-overlay"></div>').appendTo('#wrapper'),
        $quickViewInner = $('<div id="quick-view-inner"></div>').appendTo('#quick-view'),
        $quickViewClose = $('<div id="quick-view-close">закрыть <i class="glyphicon glyphicon-remove"></i></div>').appendTo('#quick-view');
    $(document).on('click', '.js-quick-view', function() {
        var $this = $(this),
            url = $this.attr('href'),
            top = $(window).scrollTop() + 100;
    
        $.ajax({
            type: "POST",
            url: url,
            data: "action=quick-view",
            success: function (response) {
                $quickViewInner.fadeOut(200).html(response).fadeIn(200);
    
                $quickView.css("top", top);
    
                $quickView.animate({width: "show"}, 300);
                $quickViewOverlay.fadeIn(300);
    
                $('.js-quick-view-prev').tooltip({
                    placement: "bottom",
                    title: "Предыдущий"
                });
                $('.js-quick-view-next').tooltip({
                    placement: "bottom",
                    title: "Следующий"
                });
                
                $quickView.find('a[href$=".jpg"], a[href$=".jpeg"], a[href$=".JPG"], a[href$=".png"], a[href$=".gif"]').not('[target="_blank"], .js-no-lightbox').fancybox(fancybox);
            }
        });
    
        return false;
    });
    $quickViewOverlay.click(function() {
        $quickView.animate({width: "hide"}, 300);
        $quickViewOverlay.fadeOut(300);
    });
    $quickViewClose.click(function() {
        $quickView.animate({width: "hide"}, 300);
        $quickViewOverlay.fadeOut(300);
    });

/** Подключаем лайтбокс **/
    var fancybox = {
        tpl: {
            closeBtn : '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;">закрыть <i class="glyphicon glyphicon-remove"></i></a>'
        },
        afterLoad: function() {
            $('<div class="fancybox-image-of">Изображение <span>'+(this.index+1)+'</span> из <span>'+this.group.length+'</span></div>').appendTo('.fancybox-skin');
        },
        maxHeight: '80%'
    };
    $(document).find('a[href$=".jpg"], a[href$=".jpeg"], a[href$=".JPG"], a[href$=".png"], a[href$=".gif"]').not('[target="_blank"], .js-no-lightbox').fancybox(fancybox);



