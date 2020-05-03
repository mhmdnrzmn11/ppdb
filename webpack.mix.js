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

mix.copyDirectory('node_modules/startbootstrap-sb-admin-2/js', 'public/js')
    .copyDirectory('node_modules/startbootstrap-sb-admin-2/css', 'public/css')
    .copyDirectory('node_modules/startbootstrap-sb-admin-2/vendor', 'public/vendor')  
    .copyDirectory('node_modules/startbootstrap-sb-admin-2/img', 'public/img');    
