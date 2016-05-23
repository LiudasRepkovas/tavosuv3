/**
 * Created by Liudas on 2016-03-07.
 */
$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".content.container").fitVids();
    $(".instagram-media").css('max-width', '100%');

    $('.ccf-submit-button').click(function(){
        $('input').removeClass('red');
        $('textarea').removeClass('red');
        var form_errors = $('.error');
        if(form_errors.length > 0){
            $.each(form_errors, function(){
                $(this).parent().find('input').addClass('red');
                $(this).parent().find('textarea').addClass('red');
            });
        }
    });
    $('.menu-icon').click(function(){
        $(this).toggleClass('open');
        $('.sidebar-navigation ul.menu').slideToggle();
    });
    //var is_chrome = navigator.userAgent.indexOf('Chrome') > -1
    //var is_explorer = navigator.userAgent.indexOf('MSIE') > -1
    //var is_firefox = navigator.userAgent.indexOf('Firefox') > -1
    //var is_safari = navigator.userAgent.indexOf("Safari") > -1
    //var is_opera = navigator.userAgent.indexOf("Presto") > -1
    //var is_mac = (navigator.userAgent.indexOf('Mac OS') != -1)
    //var is_windows = !is_mac
    //
    //if (is_chrome && is_safari){
    //    is_safari=false
    //}
    //
    //if (is_safari || is_windows){
    //    $('body').css('-webkit-text-stroke', '0.5px');
    //}

});