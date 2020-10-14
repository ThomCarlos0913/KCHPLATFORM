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
    //.js('resources/js/settings.js', 'public/js')
    //.js('resources/js/main.js', 'public/js')
    //.sass('resources/sass/app.scss', 'public/css')
    //.sass('resources/sass/login.scss', 'public/css')
    //.sass('resources/sass/index.scss', 'public/css')
    //.sass('resources/sass/dashboard.scss', 'public/css')
    //.sass('resources/sass/work.scss', 'public/css')
    //.sass('resources/sass/people.scss', 'public/css')
    //.sass('resources/sass/settings.scss', 'public/css')
    //.sass('resources/sass/profile.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sass('resources/sass/main.scss', 'public/css');
