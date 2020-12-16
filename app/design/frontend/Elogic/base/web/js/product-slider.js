define([
    'jquery',
    'jquery-ui-modules/widget',
    'slick'
], function ($) {
    'use strict';

    $.widget('elogic.productSlider', {
        options: {
            slickConfig: {
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                responsive: [
                    {
                        breakpoint: 1130,
                        settings: {
                            slidesToScroll: 1,
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 610,
                        settings: {
                            slidesToScroll: 1,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 490,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 220,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            }
        },

        _create: function() {
            this.element.slick(this.options.slickConfig);
        }
    });

    return $.elogic.productSlider;
});
