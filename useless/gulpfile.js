var elixir = require('laravel-elixir'),
	jsPathResouces = 'resources/assets/js',
	jsPathPublic = 'public/js',
	cssPathResouces = 'resources/assets/css',
	cssPathPublic = 'public/css',
    fontPathResouces = 'resources/assets/fonts',
    fontPathPublic = 'public/fonts';
require('cd-pretty-photo');

elixir(function(mix) {
	//public
    mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', cssPathPublic);
    mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', jsPathPublic);
    mix.copy('node_modules/font-awesome/css/font-awesome.min.css', cssPathPublic);
    mix.copy('node_modules/font-awesome/fonts', fontPathPublic);
    mix.copy('node_modules/macy/dist/macy.js', jsPathPublic);
    mix.copy('node_modules/theia-sticky-sidebar/dist/', jsPathPublic);

    //resouces
    mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', jsPathResouces);
    mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', cssPathResouces);
    mix.copy('node_modules/font-awesome/css/font-awesome.min.css', cssPathResouces);
    mix.copy('node_modules/font-awesome/fonts', fontPathResouces);
    mix.copy('node_modules/macy/dist/macy.js', jsPathResouces);
});