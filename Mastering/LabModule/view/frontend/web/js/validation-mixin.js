define(['jquery'], function ($){
    'use strict';

    var extension = {
        isValid: function () {
            return true;
        }
    };

    return function (targetWidget) {
        // Example how to extend a widget by mixin object
        $.widget('mage.validation', targetWidget, extension); // the widget alias should be like for the target widget
        return $.mage.validation; //  the widget by parent alias should be returned
    };

    /*return function (target) {
        return target.extend(extension);
    };*/

});