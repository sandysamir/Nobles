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
   .js('resources/js/allbooks.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
//.j hena 3shan anady 3la file js gded w b3ml npm install / npm install -g cross-env w de mohma n3rrfa bs de l awel w b3deen npm run dev.