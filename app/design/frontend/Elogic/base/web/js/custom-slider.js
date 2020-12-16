define([
    'jquery',
    'jquery-ui-modules/widget',
    'slick'
], function ($) {
    'use strict';

    $.widget('elogic.carousel', {
        options: {
            slickConfig: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                vertical: true,
                infinite: true,
                dotsClass: "my-dots"
            }
        },

        _create: function() {
            var $status = this.element.closest('.container-fluid').find('.pagingInfo');
            this.element.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                var i = (currentSlide ? currentSlide : 0) + 1;
                $status.text(i + ' ' + 'of' + ' ' + slick.slideCount);
            });
            this.element.slick(this.options.slickConfig);
        }
    });

    return $.elogic.carousel;
});
