define([
    'jquery',
    'jquery-ui-modules/widget',
], function ($) {
    'use strict';

    $.widget('elogic.registryDropdown', {
        options: {
           /* uiSelectors: {
                ulList: '.registry-styling-list'

            }*/
        },
        _create: function() {
            $("ul").on("click", ".init", function() {
                $(this).closest("ul").children('li:not(.init)').toggle();
            });

            var allOptions = $("ul").children('li:not(.init)');
            $("ul").on("click", "li:not(.init)", function() {
                allOptions.removeClass('selected');
                $(this).addClass('selected');
                $("ul").children('.init').html($(this).html());
                allOptions.toggle();
            });
            this._bind();
        },
        _bind: function () {
            var ulList = this.element.find(this.options.ulList);
            this.element.on('click', '.init', function() {
                $(this).closest('.registry-styling-list').children('.registry-list-gift:not(.init)').toggle();
            });
            var allOptions = this.element.children('.registry-list-gift:not(.init)');
        }
    });

    return $.elogic.registryDropdown;
});
