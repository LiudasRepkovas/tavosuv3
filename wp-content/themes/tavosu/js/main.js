/**
 * Created by Liudas on 2016-03-07.
 */
$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".content.container").fitVids();
    $(".content.iframe-wrap").fitVids({ customSelector: "iframe[src^='https://facebook.com']"});

    $(".attachments").fitVids();
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
   $(".post-pin-it").click(function(){
       PinUtils.pinAny();
   });

    $('a').not('nav.navbar a').on("tap", function () {
        var link = $(this).attr('href');
        if (typeof link !== 'undefined') {
            window.location = link;
        }
    });
    addExtraBlankSpaceAtTheBottom();
});

function addExtraBlankSpaceAtTheBottom(){
    var page_margin_top = parseInt($(".page-wrapper.clearfix").css("margin-top"));
    var blocks_element = $(".row.work-blocks");
    var diff = window.innerHeight - $(blocks_element).outerHeight() - $("footer").outerHeight() - page_margin_top;
    $(window).resize(function(){
        if($(".row.post.single-work") != null && diff > 0 && window.innerWidth > 976){
            $("footer.row").css({"padding-bottom":diff +"px"});
        } else {
            $("footer.row").css({"padding-bottom": 0 });
        }
    });
}
