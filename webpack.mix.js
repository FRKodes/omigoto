let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.sass', 'public/css')
   .combine(
   		[
   		'public/css/icons-font.css',
   		'public/css/bootstrap.min.css',
   		'public/css/slick.css',
   		'public/css/app.css'
   		], 'public/css/all.css')
   .combine(
   		[
   		'public/js/jquery.js',
   		'public/js/popper.js',
   		'public/js/bootstrap.min.js',
   		'public/js/slick.js',
   		'public/js/app.js'
   		], 'public/js/all.js');