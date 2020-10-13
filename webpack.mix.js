const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'public/assets/frontend/css/font-awesome.min.css',
    'public/assets/frontend/simple-line-icon/css/simple-line-icons.css',
    'public/assets/frontend/stroke-gap-icons/stroke-gap-icons.css',
    'public/assets/frontend/css/ionicons.min.css',
    'public/assets/frontend/css/linearicons.css',
    'public/assets/frontend/css/nice-select.css',
    'public/assets/frontend/css/jquery.fancybox.css',
    'public/assets/frontend/css/jquery-ui.min.css',
    'public/assets/frontend/css/meanmenu.min.css',
    'public/assets/frontend/css/nivo-slider.css',
    'public/assets/frontend/css/owl.carousel.min.css',
    'public/assets/frontend/css/bootstrap.min.css',
    'public/assets/frontend/css/preloader.css',
    'public/assets/frontend/css/default.css',
    'public/assets/frontend/css/flags.css',
    'public/assets/frontend/css/jquery.datetimepicker.css',
    'assets/frontend/js/plugins/sweetalert/sweetalert.css',
    'assets/frontend/js/plugins/select2/css/select2.min.css',
    'assets/frontend/js/plugins/toastr/toastr.min.css',
    'assets/frontend/js/plugins/magnific-popup/magnific-popup.css',
    'assets/frontend/css/style.css',
    'assets/frontend/css/custom.css',
    'assets/frontend/css/responsive.css',
], 'public/css/app2.css');
mix.combine([
    'public/assets/js/jquery-1.12.4.min.js',
    'public/assets/js/popper.min.js',
    'public/assets/js/jquery-ui.js',
    'public/assets/bootstrap/js/bootstrap.min.js',
    'public/assets/owlcarousel/js/owl.carousel.min.js',
    'public/assets/js/magnific-popup.min.js',
    'public/assets/js/waypoints.min.js',
    'public/assets/js/parallax.js',
    'public/assets/js/jquery.countdown.min.js',
    'public/assets/js/imagesloaded.pkgd.min.js',
    'public/assets/js/isotope.min.js',
    'public/assets/js/jquery.dd.min.js',
    'public/assets/js/slick.min.js',
    'public/assets/js/jquery.elevatezoom.js',
    'public/assets/js/scripts.js',
], 'public/js/app2.js');
