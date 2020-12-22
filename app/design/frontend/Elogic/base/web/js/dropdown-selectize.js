define([
    'jquery',
    'jquery-ui-modules/widget',
    'selectize'
], function ($) {
    'use strict';

    $.widget('elogic.dropdownSelectize', {
        options: {
            selectSelector: '[data-role="sorter"]',
            searchEnabled: false
        },

        _create: function() {
            this.element.find(this.options.selectSelector).selectize(this.options);
            this.element.find('input').attr('readonly', true);
        }
    });

    return $.elogic.dropdownSelectize;
});
