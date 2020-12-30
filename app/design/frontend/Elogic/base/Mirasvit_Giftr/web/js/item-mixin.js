define([
    'jquery',
    'Magento_Customer/js/customer-data',
    'Magento_Ui/js/modal/modal'
], function ($, customerData) {
    'use strict';

    var mixin = {
        giftrModal: null,

        setGiftrModal: function (element) {
            this.giftrModal = $(element);
            return this;
        },

        blaBehaviour: function () {
            this.initRegistries();
            var  customer = customerData.get('customer');
            console.log('gjgj');
            if (!customer().firstname) {
                window.location = '/customer/account/login/'
            } else if (this.registries().length == 1) {
                event.stopPropagation();
                this.addProduct();
            } else {
                this.giftrModal.trigger('openModal');

            }
        }
    };

    return function (Component) {
        return Component.extend(mixin);
    };
});
