let mix = require('laravel-mix');

mix.autoload({jquery: ['$', 'window.jQuery']})
	.babel('resources/assets/js/app.js', 'public/js')
	.sass('resources/assets/sass/app.scss', 'public/css')
	.options({
		postCss: [
			require('postcss-sorting')({
				'properties-order': 'alphabetical'
			})
		]
	})