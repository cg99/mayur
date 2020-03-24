let mix = require('laravel-mix');


mix.js('src/assets/js/script.js', 'dist/')
	.copy('src/assets/img/*', 'dist/img/')
	.sass('src/assets/scss/app.scss', 'dist/')
	.browserSync({
		proxy: 'http://danphe.local/',
		files: [
      		'dist/app.css',  // Generated .css file
      		'dist/app.js',    // Generated .js file
      		'*.+(html|php)',          // Generic .html and/or .php files [no specific platform]
    	]
    });
