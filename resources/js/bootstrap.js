try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
    require('@coreui/coreui');
    require( 'datatables.net-bs4' )( $ );
} catch (e) {}
