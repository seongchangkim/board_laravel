const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/list.js', 'public/js')
    .postCss('resources/css/list.css', 'public/css', [
        //
    ]);

mix.js('resources/js/create.js', 'public/js')
    .postCss('resources/css/create.css', 'public/css', [
        //
    ]);

mix.js('resources/js/show.js', 'public/js')
    .postCss('resources/css/show.css', 'public/css', [
        //
    ]);
mix.postCss('resources/css/common.css', 'public/css')
