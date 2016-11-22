var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(function(mix) 
{
	mix.styles(
		[
		'bootstrap.css',
		'bootstrap-datetimepicker.min.css',
		'bootstrap-select.css',
		'bootstrap-theme.css',
		'cssreset.css',
		'estilos.css',
		'fonticons.css',
		'print.css'
		], 'public/assets/css/styles.css');
	});

elixir(function(mix) 
{
	mix.scripts(
		[
		'jquery-1.9.1.min.js', 
		'bootstrap.min.js',
		'bootstrap-select.min.js',
		'defaults-pt_BR.min.js',
		'html5shiv.js',
		'modernizr-2.6.1.min.js',
		'plugins.js'
		], 
		'public/assets/js/scripts.js');       
	});

elixir(function(mix) {
    mix.copy('resources/assets/img', 'public/assets/img')
    	.copy('resources/assets/css/fonticons', 'public/assets/css/fonticons');
});