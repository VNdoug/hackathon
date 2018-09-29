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

mix.js('resources/assets/js/admin/admin.js', 'public/js/admin')
    .js('resources/assets/js/site/site.js', 'public/js/site')
  .sass('resources/assets/sass/admin/admin.scss', 'public/css/admin')
  .sass('resources/assets/sass/site/site.scss', 'public/css/site')
   // .browserSync({
   //     proxy: 'localhost:8000',
   //     open: false,
   //     // files: [
   //     //             'src/**/*',
   //     //             'components/**/*',
   //     //             'index.php'
   //     //         ],
   // });
  .browserSync({
    proxy: 'localhost:8000',
    open: false,
    notify:false,
    files: [
      'app/**/*',
      'resources/**/*',
      'routes/**/*',
      'config/**/*',
     ],
  })

  .disableSuccessNotifications();