"use strict";
(function () {
    if (document.body) {
        init();
    } else {
        document.addEventListener('DOMContentLoaded', init, false);

    }

    function init() {
        console.log('start');
    }

}());
