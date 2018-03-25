let mix = require('laravel-mix');

mix.autoload({jquery: ['$', 'window.jQuery']})
	.js('resources/assets/js/app.js', 'js')
	.sass('resources/assets/sass/app.scss', 'css')
	.options({
		postCss: [
			require('postcss-sorting')({
				'properties-order': 'alphabetical'
			})
		]
	})
	.browserSync({
		proxy: 'gezijtvan.test/',
		port: 8000
	});