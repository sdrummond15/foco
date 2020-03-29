jQuery(document).ready(function ($) {

    var nextDiv = $('#header_wrap').next();

    $(this).on('scroll', function () {
        var topo = $(this).scrollTop();
        //Redimensionando a Logo
        if (topo > 100) {
            $('#logo a img').height(70);
        } else {
            $('#logo a img').height(100);
        }
    });

    //Adicionando dados no banner da home
    if ($('.cameraContent').length != 0) {
        $('.cameraContent:nth(0) .camera_caption > div').append(
            '<div class="button-link">'
            + '<a href="index.php/eventos" class="btn btn-link-banner">Inscrições Abertas</a>'
            + '</div>'
            + '<div class="more-link">'
            + '<a href="index.php/eventos" class="more-link-banner">< Saiba mais ></a>'
            + '</div>'
        );
        $('.cameraContent:nth(1) .camera_caption > div').append(
            '<div class="more-link">'
            + '<a href="index.php/eventos" class="more-link-banner">< Saiba mais ></a>'
            + '</div>'
        );
    }

    /*MENU RESPONSIVO*/

    $('.menuresp li.parent > a, .menuresp li.parent > span').after(' <button type="button"><i class="fas fa-chevron-down"></i></button>');

    $('.menuresp li.parent button').click(function () {
        $(this).siblings('ul').slideToggle();
        $(this).find('i').toggleClass('fa-chevron-up', 'fa-chevron-down');
        // $('#nav-icon').removeClass('open');
        // $('.menuresp').slideUp();
    });
    $('.menuresp li.parent > span').click(function () {
        $(this).siblings('ul').slideToggle();
        $(this).siblings('button').find('i').toggleClass('fa-chevron-up', 'fa-chevron-down');
        // $('#nav-icon').removeClass('open');
        // $('.menuresp').slideUp();
    });

    $(window).on('resize', function () {
        var menuresp = $(".gotomenu");

        $('.menuresp').css('top', $('#topmenu_wrap').outerHeight());

        menuresp.each(function () {
            if (!$(this).is(':visible')) {
                $('.menuresp').hide();
                $('#nav-icon').removeClass('open');
            }
        });


    }).trigger('resize');

    $('.menuresp').hide();

    $("#gotomenu").click(function () {
        $('.menuresp').slideToggle();
    });

    textClass($('.blog-home h2 a'));

    //ADD CLASS
    function textClass(classe) {
        classe.each(function (index, element) {
            var heading = $(element);
            var word_array, last_word, first_part;

            word_array = heading.html().split(/\s+/); // split on spaces
            last_word = word_array.pop();             // pop the last word
            first_part = word_array.join(' ');        // rejoin the first words together

            heading.html([first_part, ' <span class="last-word">', last_word, '</span>'].join(''));
        });
    }

    $('#topmenu li').mouseover(function () {
        $(this).children('ul').width($(this).width());
    }).mouseout(function () {
        $(this).children('ul').width('auto');
    });

    $('.moduletable-endereco iframe').height(parseInt($('.moduletable-endereco iframe').width() * 0.6));

    $('.btn-login-logout').click(function () {
        $('#login-form').slideToggle();
    });

    $(window).on('resize', function () {
        $('.items-leading .img-intro').height($('.items-leading .img-intro').width() * 0.55);
        $('.items-row .img-intro').height($('.items-row .img-intro').width());
    }).trigger('resize');

    $('#leftmenu .moduletable-menuint h3').html('Menu <i class="fas fa-bars"></i>');

    $('#leftmenu .moduletable-menuint h3').click(function () {
        $(this).siblings('ul').slideToggle();
        $(this).find('i').toggleClass('fa-times', 'fa-bars');
    });

});

jQuery(window).load(function () {

    jQuery(window).on('resize', function () {
        var outerHeight = 0;
        jQuery('#content-menu_wrap_bg').siblings('div').each(function () {
            outerHeight += parseInt(jQuery(this).height());
        });
        jQuery('#content-menu_wrap_bg').css('min-height', parseInt(jQuery(window).height() - outerHeight + 1));
    }).trigger('resize');

});