let mix = require('laravel-mix');


mix.js('src/js/script.js', 'dist/')
	.copy('src/img/*', 'dist/img/')
	.sass('src/scss/app.scss', 'dist/')
	.browserSync({
		proxy: 'http://localhost/wp-demo',
		files: [
			'dist/app.css',  // Generated .css file
			'dist/script.js',    // Generated .js file
			'*.+(html|php)',          // Generic .html and/or .php files [no specific platform]
		]
	});
