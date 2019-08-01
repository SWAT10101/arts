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

mix.combine([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/materialize-css/dist/js/materialize.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    'node_modules/sweetalert2/dist/sweetalert2.min.js',
    ]
   ,'public/js/app.js');

mix.sass('resources/sass/app.scss', 'public/css');


