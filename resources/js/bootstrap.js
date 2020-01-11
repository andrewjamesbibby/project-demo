try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    window.axios = require('axios');

    require('bootstrap');
    require('@coreui/coreui');
    require( 'datatables.net-bs4' )( $ );

    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    let token = document.head.querySelector('meta[name="csrf-token"]');
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} catch (e) {}
