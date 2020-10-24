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
    .sass('resources/sass/app.scss', 'public/css')
    .sass('node_modules/font-awesome/scss/font-awesome.scss', 'public/css');

mix.sass('resources/sass/mdb/mdb-pro.scss', 'public/css');
mix.sass('resources/sass/_website.scss', 'public/css');

mix.copy('resources/js/functions.js', 'public/js').minify('public/js/functions.js');
mix.copy('resources/js/website.js', 'public/js').minify('public/js/website.js');
mix.copy('resources/js/pages/posts.js', 'public/js/pages').minify('public/js/pages/posts.js');
mix.copy('resources/js/pages/admin.js', 'public/js/pages').minify('public/js/pages/admin.js');

mix.version();
