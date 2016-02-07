var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
        .scriptsIn()
        .version([
            'css/app.css',
            'js/all.js'
        ])
        .browserSync({
            proxy: 'rentalratings.dev',
            tunnel: false,
            open: false
        });
});