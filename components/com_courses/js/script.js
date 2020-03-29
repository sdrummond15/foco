jQuery(document).ready(function ($) {



    $(window).on('resize', function () {



        $('.course-img').each(function () {

            $(this).height($(this).width());

        });



    }).trigger('resize');



});