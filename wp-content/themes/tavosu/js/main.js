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
        $('.sidebar-navigation .mobile-menu ul.menu').slideToggle();
    });

    $('a').on('click touchend', function(e) {
        var el = $(this);
        window.location = el.attr('href');
    });

});