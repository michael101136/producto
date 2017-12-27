let mix = require('laravel-mix');


mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
	'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
],'public/js/bootstrap.js' , 'node_modules')

mix.scripts([
	 'node_modules/jquery/dist/jquery.js'
],'public/js/jquery.js' , 'node_modules')


mix.browserSync({
	proxy: 'http://localhost:81/spaziour/public/'
});
