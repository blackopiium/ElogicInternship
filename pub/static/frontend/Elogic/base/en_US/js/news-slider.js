define([
    'jquery',
    'jquery-ui-modules/widget',
    'slick'
], function ($) {
    'use strict';

    $.widget('elogic.newsSlider', {
        options: {
            slickConfig: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                infinite: true,
                dotsClass: "my-dots",
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 300,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true
                        }
                    }
                ]
            }
        },

        _create: function() {
            this.element.slick(this.options.slickConfig);
        }
    });

    return $.elogic.newsSlider;
});
