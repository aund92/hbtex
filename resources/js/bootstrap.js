window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
    require('admin-lte');
    window.bsCustomFileInput = require('../../node_modules/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js');
    require('../../node_modules/admin-lte/plugins/select2/js/select2.full.min.js');
    require('../../node_modules/admin-lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js');
    // require('../../node_modules/admin-lte/plugins/moment/moment-with-locales.min.js');
    require('../../node_modules/admin-lte/plugins/inputmask/jquery.inputmask.min');
    require('../../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js');
    window.toastr = require('../../node_modules/admin-lte/plugins/toastr/toastr.min.js');

} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });