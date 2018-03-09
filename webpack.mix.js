let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.sass', 'public/css')
   .combine(
   		[
   		'public/css/icons-font.css',
   		'public/css/bootstrap.min.css',
   		'public/css/slick.css',
   		'public/css/app.css'
   		], 'public/css/all.css');