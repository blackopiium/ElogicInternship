define([
    'jquery',
    'jquery-ui-modules/widget',
    'slick'
], function ($) {
    'use strict';

    $.widget('elogic.tabSliderFix', {
        options: {
            collapsibleElement: '[data-role=collapsible]',
            content: '[data-role=content]',
            slickElement: '.slick-slider'
        },

        _create: function() {
            this._bind();
        },

        /**
         * Event binding, will monitor change event.
         * @private
         */
        _bind: function () {
            // Redraw slide after content type gets redrawn
            this.element.find(this.options.collapsibleElement).on('dimensionsChanged', function (event, data) {
                if (data.opened) {
                    var collapsibleElement = $(event.currentTarget);
                    var contentElement= collapsibleElement.data("mageCollapsible").options.content
                    var slickElement = contentElement.find(this.options.slickElement);
                    if (slickElement.length) {
                        slickElement.slick('setPosition');
                    }
                }
            }.bind(this));
        }
    });

    return $.elogic.tabSliderFix;
});
