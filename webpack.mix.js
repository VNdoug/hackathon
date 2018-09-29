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

mix
	// .js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
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
		disableSuccessNotifications: true,
      files: [
                   'app/**/*',
                   'resources/**/*',
                   'routes/**/*',
                   'config/**/*',
               ],
	});