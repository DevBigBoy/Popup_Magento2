define([
    'jquery',
    'Magento_Ui/js/modal/modal'
], function ($, model) {
    'use strict';

    return function (settings){
        const  content = settings.content,
            timeout = settings.timeout;
        const options = {
            type: 'popup',
            responsive: true,
            autoOpen: true,
        };

        $('<div />').html(content).modal(options);
    }
})
