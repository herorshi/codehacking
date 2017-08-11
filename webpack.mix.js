let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

/*  .js('resources/assets/sum_lib/js/libs/jquery.js', 'public/css/admin_js/libs.js')
   .js('resources/assets/sum_lib/js/libs/bootstrap.js', 'public/css/admin_js/libs.js')
   .js('resources/assets/sum_lib/js/libs/metisMenu.js', 'public/css/admin_js/libs.js')
   .js('resources/assets/sum_lib/js/libs/sb-admin-2.js', 'public/css/admin_js/libs.js')
   .js('resources/assets/sum_lib/js/libs/scripts.js', 'public/css/admin_js/libs.js');*/
   
   /*.copy('resources/assets/sum_lib/css/libs/blog-post.css', 'public/css/admin_css/libs.css')
   .copy('resources/assets/sum_lib/css/libs/bootstrap.css', 'public/css/admin_css/libs.css')
   .copy('resources/assets/sum_lib/css/libs/font-awesome.css', 'public/css/admin_css/libs.css')
   .copy('resources/assets/sum_lib/css/libs/metisMenu.css', 'public/css/admin_css/libs.css')
   .copy('resources/assets/sum_lib/css/libs/sb-admin-2.css', 'public/css/admin_css/libs.css');
   */

mix.combine([
    'resources/assets/sum_lib/css/libs/blog-post.css',
    'resources/assets/sum_lib/css/libs/bootstrap.css',
    'resources/assets/sum_lib/css/libs/font-awesome.css',
    'resources/assets/sum_lib/css/libs/metisMenu.css',
    'resources/assets/sum_lib/css/libs/sb-admin-2.css'
], 'public/css/admin_css/libs.css');



mix.combine([
    'resources/assets/sum_lib/js/libs/jquery.js',
    'resources/assets/sum_lib/js/libs/bootstrap.js',
    'resources/assets/sum_lib/js/libs/metisMenu.js',
    'resources/assets/sum_lib/js/libs/sb-admin-2.js',
    'resources/assets/sum_lib/js/libs/scripts.js'
], 'public/css/admin_js/libs.js');