/* General scripts for the playground */

'use strict';

/* MENU CONTROL */

$(function(){
            
    $(document).on('click touchend', '#menu-button', function(event){
        event.stopPropagation();
        $('#globalnav').addClass('revealed');
        $('#window-mask').addClass('visible');
    });

    $(window).click(function(){
        $('#globalnav').removeClass('revealed');
        $('#window-mask').removeClass('visible');
    });

    $(document).on('click touchend', '#globalnav', function(event){
        event.stopPropagation();
    });
    
    $(window).scroll(function(){
        $(document).scrollTop() > $('#globalheader').height() ? $('#globalheader').addClass('transparent') : $('#globalheader').removeClass('transparent');
    });
    
    $(document).on('click touchend', '#gn>li', function(){
        $(this).next().slideToggle('fast');
    });
    
});